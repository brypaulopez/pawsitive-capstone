<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\VetTable;
use App\Models\ProductTable;

class VetController extends Controller
{
    public function index(){
        $vet = DB::select("SELECT * FROM vet_tables");
        return view('vet-admin', compact('vet'));
    }
    public function view(Request $d, string $id){
        $vet = VetTable::query()
        ->select('*')
        ->where('vet_id', '=', $id)
        ->get()
        ->first();

        $products = ProductTable::query()
        ->select('*')
        ->join('vet_tables', 'product_vet_id', '=', 'vet_tables.vet_id')
        ->where('product_vet_id', '=', $id)
        ->get();

        return view('vet-view', compact('vet', 'products'));
    }
    // View of adding products
    public function create_products(Request $v, string $id){
        $vet = VetTable::query()
        ->select('*')
        ->where('vet_id', '=', $id)
        ->get()
        ->first();

        $products = ProductTable::query()
        ->select('*')
        ->join('vet_tables', 'product_vet_id', '=', 'vet_tables.vet_id')
        ->get();

        return view('add-products', compact('vet', 'products'));
    }
    // Adding Products
    public function create(Request $p, string $id){
        $vet = VetTable::where('vet_id', '=', $id)
        ->update(
            [
                'vet_products' => $p->input('vet_products'),
            ]
        );
        $product = new ProductTable;
        $file = $p->file('image');
        $filenameextension = time() . "." . $p->image->extension();
        $filename = $p->getSchemeAndHttpHost() . "/img/products/" . $filenameextension;
        $p->image->move(public_path('/img/products/'), $filename);

        $product->product_vet_id = $p->input('product_vet_id');
        $product->vet_name = $p->input('vet_name');
        $product->product_name = $p->input('product_name');
        $product->product_details = $p->input('product_details');
        $product->product_category = $p->input('product_category');
        $product->product_stock = $p->input('product_stock');
        $product->product_price = $p->input('product_price');
        $product->product_image = $filenameextension;
        $product->save();

        return redirect("/create-products/$id");
    }
    // edit products
    public function edit(string $id){
        $products = ProductTable::query()
        ->select('*')
        ->join('vet_tables', 'product_vet_id', '=', 'vet_tables.vet_id')
        ->where('product_id', '=', $id)
        ->get()
        ->first();

        $vet = VetTable::query()
        ->select('*')
        ->where('vet_id', '=', $id)
        ->get()
        ->first();

        return view('edit-products', compact('products', 'vet'));
    }
    // update products
    public function update_products(Request $p, string $id){
        $products = ProductTable::where('product_id', '=', $id)
        ->update(
            [
            'product_name' => $p->input('name'),
            'product_details' => $p->input('details'),
            'product_category' => $p->input('category'),
            'product_stock' => $p->input('stock'),
            'product_price' => $p->input('price'),
            ]
        );
        return redirect("/vet-admin/edit/$id");
    }
    // select package
    public function select(){
        return view('select-package');
    }
    public function selectA(){
        $package = 'a';
        return view('create-partners', compact('package'));
    }
    public function selectB(){
        $package = 'b';
        return view('create-partners', compact('package'));
    }
    public function selectC(){
        $package = 'c';
        return view('create-partners', compact('package'));
    }
    // final creation with package selected
    public function create_vet(Request $v){
        $vet = new VetTable;
        $file = $v->file('image');
        $filenameextension = time() . "." . $v->image->extension();
        $filename = $v->getSchemeAndHttpHost() . "/img/vets/" . $filenameextension;
        $v->image->move(public_path('/img/vets/'), $filename);

        $vet->vet_name = $v->input('name');
        $vet->vet_groom = $v->input('groom');
        $vet->vet_boarding = $v->input('boarding');
        $vet->vet_products = $v->input('products');
        $vet->vet_city = $v->input('city');
        $vet->vet_municipality = $v->input('municipality');
        $vet->vet_state = $v->input('state');
        $vet->vet_package = $v->input('package');
        $vet->vet_address = $v->input('address');
        $vet->vet_desc = $v->input('description');
        $vet->vet_image = $filenameextension;
        $vet->save();

        $vets = DB::select("SELECT * FROM vet_tables");
        return view("vet-admin", compact('vets'));
    }
    // delete vet partner
    public function delete(string $id){
        $vet = VetTable::where('vet_id', '=', $id)
        ->delete();
        return redirect("vet-admin");
    }
}
