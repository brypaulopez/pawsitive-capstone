<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserTable;
use App\Models\ProductTable;
use DB;

class ProductController extends Controller
{
    public function products(){
        $products = ProductTable::query()
        ->select('*')
        ->get();
    }
}
