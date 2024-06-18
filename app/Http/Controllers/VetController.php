<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\VetTable;
use App\Models\ProductTable;
use App\Models\GroomTable;
use App\Models\BoardingTable;

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

        $groom = GroomTable::query()
        ->select('*')
        ->join('vet_tables', 'groom_vet_id', '=', 'vet_tables.vet_id')
        ->where('groom_vet_id', '=', $id)
        ->get();

        $board = BoardingTable::query()
        ->select('*')
        ->join('vet_tables', 'board_vet_id', '=', 'vet_tables.vet_id')
        ->where('board_vet_id', '=', $id)
        ->get();

        $count = ProductTable::query()
        ->where('product_vet_id', '=', $id)
        ->count();

        return view('vet-view', compact('vet', 'products', 'count', 'groom', 'board'));
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
        // $vet = VetTable::where('vet_id', '=', $id)
        // ->update(
        //     [
        //         'vet_products' => $p->input('vet_products'),
        //     ]
        // );
        $vet = VetTable::query()
        ->where('vet_id', '=', $id)
        ->select('*')
        ->get()
        ->first();
        $count = ProductTable::query()
        ->where('product_vet_id', '=', $id)
        ->count();
        if ($vet->vet_package == 'b' && $count < 10) {
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
        else {
            return redirect("/vet-admin/$id");
        }

        if ($vet->vet_package == 'c' && $count < 20) {
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
        else {
            return redirect("/vet-admin/$id");
        }
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

        return redirect("vet-admin");
    }
    // delete vet partner
    public function delete(string $id){
        $vet = VetTable::where('vet_id', '=', $id)
        ->delete();
        return redirect("/vet-admin");
    }
    // delete product for specific vet partner
    public function delete_products(string $id){
        $vet = ProductTable::where('product_id', '=', $id)
        ->delete();
        return redirect("/vet-admin");
    }
    // create groom - view
    public function create_groom(Request $g, string $id){
        $vet = VetTable::query()
        ->select('*')
        ->where('vet_id', '=', $id)
        ->get()
        ->first();

        return view('add-groom', compact('vet'));
    }
    // create groom - final
    public function createG(Request $g, string $id){
        $vet = VetTable::query()
        ->select('*')
        ->where('vet_id', '=', $id)
        ->get()
        ->first();

        $groom = new GroomTable;
        $file = $g->file('image');
        $filenameextension = time() . "." . $g->image->extension();
        $filename = $g->getSchemeAndHttpHost() . "/img/groom/" . $filenameextension;
        $g->image->move(public_path('/img/groom/'), $filename);

        $groom->groom_vet_id = $g->input('product_vet_id');
        $groom->vet_name = $g->input('vet_name');
        $groom->groom_details = $g->input('details');
        $groom->groom_price = $g->input('price');
        $groom->groom_image = $filenameextension;
        $groom->save();

        return redirect("/vet-admin");
    }
    // edit groom
    public function editG(string $id){
        $groom = GroomTable::query()
        ->select('*')
        ->join('vet_tables', 'groom_vet_id', '=', 'vet_tables.vet_id')
        ->where('groom_id', '=', $id)
        ->get()
        ->first();

        $vet = VetTable::query()
        ->select('*')
        ->where('vet_id', '=', $id)
        ->get()
        ->first();

        return view('edit-groom', compact('groom', 'vet'));
    }
    // update groom = final
    public function updateG(Request $g, string $id){
        $groom = GroomTable::where('groom_id', '=', $id)
        ->update(
            [
            'groom_details' => $g->input('details'),
            'groom_price' => $g->input('price'),
            ]
        );
        return redirect("/vet-admin/groom/$id");
    }
    // delete groom
    public function deleteG(string $id){
        $groom = GroomTable::where('groom_id', '=', $id)
        ->delete();
        return redirect("/vet-admin");
    }
    // create boarding
    public function create_boarding(string $id){
        $vet = VetTable::query()
        ->select('*')
        ->where('vet_id', '=', $id)
        ->get()
        ->first();

        return view('add-board', compact('vet'));
    }
    // create boarding - final
    public function createB(Request $b, string $id){
        $vet = VetTable::query()
        ->select('*')
        ->where('vet_id', '=', $id)
        ->get()
        ->first();

        $board = new BoardingTable;
        $file = $b->file('image');
        $filenameextension = time() . "." . $b->image->extension();
        $filename = $b->getSchemeAndHttpHost() . "/img/board/" . $filenameextension;
        $b->image->move(public_path('/img/board/'), $filename);

        $board->board_vet_id = $b->input('product_vet_id');
        $board->vet_name = $b->input('vet_name');
        $board->board_inclusions = $b->input('inclusions');
        $board->board_price = $b->input('price');
        $board->board_image = $filenameextension;
        $board->save();

        return redirect("/vet-admin");
    }
    // edit - view
    public function editB(string $id){
        $board = BoardingTable::query()
        ->select('*')
        ->join('vet_tables', 'board_vet_id', '=', 'vet_tables.vet_id')
        ->where('board_id', '=', $id)
        ->get()
        ->first();

        $vet = VetTable::query()
        ->select('*')
        ->where('vet_id', '=', $id)
        ->get()
        ->first();

        return view('edit-board', compact('board', 'vet'));
    }
    // update board = final
    public function updateB(Request $b, string $id){
        $board = BoardingTable::where('board_id', '=', $id)
        ->update(
            [
            'board_inclusions' => $b->input('inclusions'),
            'board_price' => $b->input('price'),
            ]
        );
        return redirect("/vet-admin/board/$id");
    }
}
