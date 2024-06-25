<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserTable;
use App\Models\Dogs;
use App\Models\ProductTable;
use App\Models\CartTable;
use App\Models\VetTable;
use App\Models\UserReview;
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
}
