<?php

namespace App\Http\Controllers;
use App\Models\UserTable;
use App\Models\Dogs;
use App\Models\ProductTable;
use App\Models\CartTable;
use App\Models\VetTable;
use App\Models\Map;
use App\Models\UserReview;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function please_signup() {
        toastr()->error('Please Signup to Proceed, Thanks!', ['timeOut' => 5000]);
        return redirect('/signup');
    }
    public function signup_page(){
        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return redirect('/');
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return view('signup');
        }
    }
    public function signup(Request $request){
        $user = new UserTable;

        request()->validate([
            'password' => 'required'
        ]);

        $user->user_fname = $request->input('fname');
        $user->user_lname = $request->input('lname');
        $user->user_email = $request->input('email');
        $user->user_username = $request->input('uname');
        $user->user_password = Hash::make($request->input('password'));
        $user->user_role = "0";
        $user->save();
        toastr()->success('Account successfully registered, you can now login!');
        return redirect("/login");
    }
    public function login_page(){
        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return redirect('/');
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return view('login');
        }
    }
    public function login(Request $request){

        request()->validate([
            'password' => 'required',
            'uname' => 'required'
        ]);

        $user = UserTable::where('user_username', '=', $request->uname)->first();
        if ($user) {
            if ($user->user_username == 'admin' && Hash::check($request->password,$user->user_password)) {
                $request->session()->put('id', $user->user_id);
                $request->session()->put('fname', $user->user_fname);
                $request->session()->put('lname', $user->user_lname);
                $request->session()->put('username', $user->user_username);
                $request->session()->put('email', $user->user_email);
                $request->session()->put('role', $user->user_role);
                toastr()->success('Hi Admin, Welcome!');
                return redirect('/dogs-admin');
            }
            elseif ($user->user_username != 'admin' && Hash::check($request->password,$user->user_password)) {
                $request->session()->put('id', $user->user_id);
                $request->session()->put('fname', $user->user_fname);
                $request->session()->put('lname', $user->user_lname);
                $request->session()->put('username', $user->user_username);
                $request->session()->put('email', $user->user_email);
                $request->session()->put('role', $user->user_role);
                toastr()->success('Login Successfully, Enjoy');
                return redirect('/');
            }
            else {
                return redirect('/login')->with('wrong-password','Password is incorrect!');
            }
        }
        else {
            return redirect('/login')->with('no-account','No Account is Registered!');
        }
    }
    public function logout(){
        if (Session::has('id')) {
            Session::pull('id');
            Session::pull('fname');
            Session::pull('lname');
            Session::pull('username');
            Session::pull('email');
            Session::pull('role');
            return redirect("/logout-login");
        }
    }
    public function logout_login(){
        return redirect('/login');
    }
    public function view_services(){
        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return view("services");
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }
    public function view_products(){
        $products = ProductTable::query()
        ->select('*')
        ->paginate(8);

        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return view("products", compact('products', 'showCart', 'showOrder'));
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }
    public function cart(Request $c, string $id){
        // IF ELSE qty > current stock = error
        // qty <=
        $product = ProductTable::where('product_id', '=', $id)
        ->get()
        ->first();
        $cart = new CartTable;
        $qty = $c->input('quantity');

        if ($qty > $product->product_stock) {
            toastr()->error('You exceed the amount of quantity available!');
            return back();
        } else {
            $cart->product_user_id = Session::get('id');
            $cart->cart_name = $product->product_name;
            $cart->cart_price = $product->product_price;
            $cart->cart_qty = $c->input('quantity');
            $cart->cart_image = $product->product_image;
            $cart->cart_address = '';
            $cart->cart_city = '';
            $cart->cart_state = '';
            $cart->zipcode = 0;
            $cart->save();
            $product_update = ProductTable::where('product_id', '=', $id)
            ->update(
                [
                    'product_stock' => $product->product_stock-$qty,
                ]
            );

            return redirect('/products');
        }
    }
    public function delete_cart(string $id){
        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            $carts = CartTable::where('cart_id', '=', $id)
            ->get()
            ->first();
            $product = ProductTable::where('product_name', '=', $carts->cart_name)
            ->get()
            ->first();
            $qty = $carts->cart_qty;
            $product_update = ProductTable::where('product_name', '=', $carts->cart_name)
                ->update(
                    [
                        'product_stock' => $product->product_stock+$qty,
                    ]
                );
            $cart = CartTable::where('cart_id', '=', $id)
            ->delete();
            return back();
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }
    public function single_page(string $id){
        $product = ProductTable::query()
        ->select('*')
        ->where('product_id', '=', $id)
        ->get()
        ->first();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();
        
        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return view('view-product', compact('product', 'showCart', 'showOrder'));
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }
    // Categories - foods
    public function foods(){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $foods = ProductTable::where('product_category', '=', 'foods')
        ->paginate(8);

        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return view("food", compact('showCart', 'foods', 'showOrder'));
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }
    // Categories - medicines
    public function medicines(){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $medicines = ProductTable::where('product_category', '=', 'medicines')
        ->paginate(8);

        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return view("medicines", compact('showCart', 'medicines', 'showOrder'));
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }
    // Categories - grooming
    public function grooming(){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $grooming = ProductTable::where('product_category', '=', 'grooming')
        ->paginate(8);

        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return view("grooming", compact('showCart', 'grooming', 'showOrder'));
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }
    // Categories - accessories
    public function accessories(){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $accessories = ProductTable::where('product_category', '=', 'accessories')
        ->paginate(8);

        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return view("accessories", compact('showCart', 'accessories', 'showOrder'));
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }
    public function search_clinic(){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $city = VetTable::query()
        ->select('*')
        ->where('vet_city', '!=' ,'NA')
        ->get();

        $municipality = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '!=' ,'NA')
        ->get();

        return view('search-clinic', compact('showCart', 'city', 'municipality', 'showOrder'));
    }
    public function clinic(Request $request){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $city = VetTable::query()
        ->select('*')
        ->where('vet_city', '!=' ,'NA')
        ->get();

        $municipality = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '!=' ,'NA')
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $input = $request->input('city');
        $inputM = $request->input('municipality');

        $filteredC = VetTable::where('vet_city', '=', $input)
        ->get()
        ->first();

        $filteredM = VetTable::where('vet_municipality', '=', $inputM)
        ->get()
        ->first();

        $filteredGC = VetTable::where('vet_city', '=', $input)
        ->get()
        ->first();

        $filteredGM = VetTable::where('vet_city', '=', $inputM)
        ->get()
        ->first();

        $countC = VetTable::where('vet_city', '=', $input)
        ->get()
        ->count();

        $countM = VetTable::where('vet_municipality', '=', $inputM)
        ->get()
        ->count();

        $filterC = VetTable::query()
        ->select('*')
        ->where('vet_city', '=' , $input)
        ->get();

        $filterM = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '=' , $inputM)
        ->get();

        $filterGC = VetTable::query()
        ->select('*')
        ->where('vet_city', '=' , $input)
        ->where('vet_groom', '=' , 'yes')
        ->get();

        $filterGM = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '=' , $inputM)
        ->where('vet_groom', '=' , 'yes')
        ->get();

        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return view('clinic', compact('showCart', 'city', 'filterC', 'filteredC', 'countC', 'countM', 'municipality', 'filterM', 'filteredM', 'filterGC', 'filterGM', 'filteredGC', 'filteredGM', 'showOrder'));
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }
    // specific clinic
    public function specific_clinic(string $id){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $clinic = Map::query()
        ->select('*')
        ->join('vet_tables', 'map_vet_id', '=', 'vet_tables.vet_id')
        ->where('map_vet_id', '=', $id)
        ->get()
        ->first();

        return view('specific-clinic', compact('showCart', 'showOrder', 'clinic'));
    }
    public function search_grooming(Request $request){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $city = VetTable::query()
        ->select('*')
        ->where('vet_city', '!=' ,'NA')
        ->get();

        $municipality = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '!=' ,'NA')
        ->get();

        return view('search-grooming', compact('showCart', 'city', 'municipality', 'showOrder'));
    }
    public function groom(Request $request){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $city = VetTable::query()
        ->select('*')
        ->where('vet_city', '!=' ,'NA')
        ->get();

        $cityG = VetTable::query()
        ->select('*')
        ->where('vet_city', '!=' ,'NA')
        ->where('vet_groom', '=' , 'yes')
        ->get();

        $municipality = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '!=' ,'NA')
        ->get();

        $municipalityG = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '!=' ,'NA')
        ->where('vet_groom', '=' , 'yes')
        ->get();

        $input = $request->input('city');
        $inputM = $request->input('municipality');

        $filteredC = VetTable::where('vet_city', '=', $input)
        ->get()
        ->first();

        $filteredM = VetTable::where('vet_municipality', '=', $inputM)
        ->get()
        ->first();

        $countC = VetTable::where('vet_city', '=', $input)
        ->where('vet_groom', '=' , 'yes')
        ->get()
        ->count();

        $countM = VetTable::where('vet_municipality', '=', $inputM)
        ->where('vet_groom', '=' , 'yes')
        ->get()
        ->count();

        $filterC = VetTable::query()
        ->select('*')
        ->where('vet_city', '=' , $input)
        ->get();

        $filterM = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '=' , $inputM)
        ->get();

        $filterGC = VetTable::query()
        ->select('*')
        ->where('vet_city', '=' , $input)
        ->where('vet_groom', '=' , 'yes')
        ->get();

        $filterGM = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '=' , $inputM)
        ->where('vet_groom', '=' , 'yes')
        ->get();

        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return view('groom', compact('showCart', 'city', 'filterC', 'filteredC', 'countC', 'countM', 'municipality', 'filterM', 'filteredM', 'filterGC', 'filterGM', 'cityG', 'municipalityG', 'showOrder'));
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }
    public function specific_groom(string $id){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $groom = Map::query()
        ->select('*')
        ->join('groom_tables', 'map_vet_id', '=', 'groom_tables.groom_vet_id')
        ->where('map_vet_id', '=', $id)
        ->get()
        ->first();

        $clinic = VetTable::where('vet_id', $id)
        ->get()
        ->first();

        return view('specific-groom', compact('showCart', 'showOrder', 'groom', 'clinic'));
    }
    public function search_boarding(){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $city = VetTable::query()
        ->select('*')
        ->where('vet_city', '!=' ,'NA')
        ->get();

        $municipality = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '!=' ,'NA')
        ->get();

        return view('search-boarding', compact('showCart', 'city', 'municipality', 'showOrder'));
    }
    public function board(Request $request){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $city = VetTable::query()
        ->select('*')
        ->where('vet_city', '!=' ,'NA')
        ->get();

        $cityB = VetTable::query()
        ->select('*')
        ->where('vet_city', '!=' ,'NA')
        ->where('vet_boarding', '=' , 'yes')
        ->get();

        $municipality = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '!=' ,'NA')
        ->get();

        $municipalityB = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '!=' ,'NA')
        ->where('vet_boarding', '=' , 'yes')
        ->get();

        $input = $request->input('city');
        $inputM = $request->input('municipality');

        $filteredC = VetTable::where('vet_city', '=', $input)
        ->get()
        ->first();

        $filteredM = VetTable::where('vet_municipality', '=', $inputM)
        ->get()
        ->first();

        $countC = VetTable::where('vet_city', '=', $input)
        ->where('vet_boarding', '=' , 'yes')
        ->get()
        ->count();

        $countM = VetTable::where('vet_municipality', '=', $inputM)
        ->where('vet_boarding', '=' , 'yes')
        ->get()
        ->count();

        $filterC = VetTable::query()
        ->select('*')
        ->where('vet_city', '=' , $input)
        ->get();

        $filterM = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '=' , $inputM)
        ->get();

        $filterBC = VetTable::query()
        ->select('*')
        ->where('vet_city', '=' , $input)
        ->where('vet_boarding', '=' , 'yes')
        ->get();

        $filterBM = VetTable::query()
        ->select('*')
        ->where('vet_municipality', '=' , $inputM)
        ->where('vet_boarding', '=' , 'yes')
        ->get();

        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return view('board', compact('showCart', 'city', 'filterC', 'filteredC', 'countC', 'countM', 'municipality', 'filterM', 'filteredM', 'filterBC', 'filterBM', 'municipalityB', 'cityB', 'showOrder'));
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }
    public function specific_board(string $id){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $board = Map::query()
        ->select('*')
        ->join('boarding_tables', 'map_vet_id', '=', 'boarding_tables.board_vet_id')
        ->where('map_vet_id', '=', $id)
        ->get()
        ->first();

        $clinic = VetTable::where('vet_id', $id)
        ->get()
        ->first();

        return view('specific-board', compact('showCart', 'showOrder', 'board', 'clinic'));
    }
    public function user_profile(){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return view('user-profile', compact('showCart', 'showOrder'));
        }
        elseif (Session::get('role') == 1) {
            return redirect('/dogs-admin');
        }
        else {
            return redirect('/');
        }
    }

    public function review(){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        request()->validate([
            'review' => 'required|min:5|max:500'
        ]);

        $review = UserReview::create([
            'user_review_id' => Session::get('id'),
            'review' => request()->get('review', ''),
            'rating' => request()->get('rating', '')
        ]);

        return redirect('/user-profile');
    }
    public function about(){
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        return view('about', compact('showCart', 'showOrder'));
    }
}
