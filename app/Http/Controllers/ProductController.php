<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserTable;
use App\Models\Dogs;
use App\Models\ProductTable;
use App\Models\CartTable;
use App\Models\VetTable;
use App\Models\UserReview;
use App\Models\TrainerTable;
use DB;
use Session;

class ProductController extends Controller
{
    public function products(){
        $products = ProductTable::query()
        ->select('*')
        ->get();
    }
    public function order(){
    $order = CartTable::where('product_user_id', Session::get('id'))
    ->update([
            'cart_address' => request()->get('address', ''),
            'cart_city' => request()->get('city', ''),
            'cart_state' => request()->get('state', ''),
            'zipcode' => request()->get('zipcode', '')
        ]);
        return redirect('/');
    }
    public function trainer(){
        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return redirect('/');
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return view('trainer-signup');
        }
    }
    public function creation(){
        request()->validate([
            'number' => 'required|min:11|max:13'
        ]);

        $trainer = TrainerTable::create([
            'first_name' => request()->get('fname', ''),
            'last_name' => request()->get('lname', ''),
            'address' => request()->get('address', ''),
            'city' => request()->get('city', ''),
            'state' => request()->get('state', ''),
            'municipality' => request()->get('municipality', ''),
            'email' => request()->get('email', ''),
            'mobile_number' => request()->get('number', '')
        ]);
        
        toastr()->success('You are now a Pawsitive Trainer! They can now find you online!');
        return redirect("/");
    }
    public function trainer_view(){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', null)
        ->get();

        $city = VetTable::query()
        ->select('*')
        ->where('vet_city', '!=' ,'NA')
        ->get();

        $municipality = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '!=' ,'NA')
        ->get();

        return view('search-trainer', compact('showCart', 'city', 'municipality', 'showOrder'));
    }
    public function trainer_show(Request $request){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', null)
        ->get();

        $city = VetTable::query()
        ->select('*')
        ->where('vet_city', '!=' ,'NA')
        ->get();

        $municipality = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '!=' ,'NA')
        ->get();

        $input = $request->input('city');
        $inputM = $request->input('municipality');

        $countC = TrainerTable::where('city', '=', $input)
        ->get()
        ->count();

        $countM = TrainerTable::where('municipality', '=', $inputM)
        ->get()
        ->count();

        $trainerC = TrainerTable::query()
        ->select('*')
        ->where('city', '!=' ,'NA')
        ->get();

        $trainerM = TrainerTable::query()
        ->select('*')
        ->where('municipality', '!=' ,'NA')
        ->get();

        $filterC = TrainerTable::query()
        ->select('*')
        ->where('city', '=' , $input)
        ->get();

        $filterM = TrainerTable::query()
        ->select('*')
        ->where('municipality', '=' , $inputM)
        ->get();

        $filterTC = TrainerTable::query()
        ->select('*')
        ->where('city', '=' , $input)
        ->get()
        ->first();

        $filterTM = TrainerTable::query()
        ->select('*')
        ->where('municipality', '=' , $inputM)
        ->get()
        ->first();

        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return view('trainer', compact('showCart', 'showOrder', 'city', 'filterC', 'countC', 'countM', 'municipality', 'filterM', 'filterTC', 'filterTM', 'trainerC', 'trainerM'));
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }
}
