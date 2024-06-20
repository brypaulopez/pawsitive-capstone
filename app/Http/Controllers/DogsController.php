<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Dogs;
use App\Models\UserTable;
use Session;

class DogsController extends Controller
{
    public function index(){
        $dogs = DB::select("SELECT * FROM dogs");
        if (Session::get('role') == 1) {
            return view('dogs-admin', compact('dogs'));
        }
        else {
            return redirect('/');
        }
    }
    // create-form
    public function create_dog(){
        if (Session::has('id') && Session::get('role') == 1) {
            return view('create-dogs');
        }
        else {
            return redirect('/');
        }
    }
    // create (final)
    public function create(Request $d){
        $dogs = new Dogs;
        $file = $d->file('image');
        $filenameextension = time() . "." . $d->image->extension();
        $filename = $d->getSchemeAndHttpHost() . "/img/dogs/" . $filenameextension;
        $d->image->move(public_path('/img/dogs/'), $filename);
        
        $dogs->dog_name = $d->input('dog_name');
        $dogs->dog_desc = $d->input('dog_desc');
        $dogs->dog_health = $d->input('dog_health');
        $dogs->dog_grooming = $d->input('dog_grooming');
        $dogs->dog_exercise = $d->input('dog_exercise');
        $dogs->dog_training = $d->input('dog_training');
        $dogs->dog_nutrition = $d->input('dog_nutrition');
        $dogs->affectionate_with_family = $d->input('affectionate_with_family');
        $dogs->good_with_dogs = $d->input('good_with_dogs');
        $dogs->good_with_children = $d->input('good_with_children');
        $dogs->shedding_level = $d->input('shedding_level');
        $dogs->grooming_frequency = $d->input('grooming_frequency');
        $dogs->drooling_level = $d->input('drooling_level');
        $dogs->coat_type = $d->input('coat_type');
        $dogs->coat_length = $d->input('coat_length');
        $dogs->good_with_strangers = $d->input('good_with_strangers');
        $dogs->playful = $d->input('playful');
        $dogs->protective_nature = $d->input('protective_nature');
        $dogs->adaptability_level = $d->input('adaptability_level');
        $dogs->trainability_level = $d->input('trainability_level');
        $dogs->barking_level = $d->input('barking_level');
        $dogs->energy_level = $d->input('energy_level');
        $dogs->dog_image = $filenameextension;
        $dogs->save();

        return redirect("dogs-admin");
    }
    // view
    public function view(string $id){
        $dogs = Dogs::query()
        ->select('*')
        ->where('dogs_id', '=', $id)
        ->get()
        ->first();
        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return redirect('/');
        }
        elseif (Session::get('id') == null) {
            return redirect('/');
        }
        else {
            return view('view-admin', compact('dogs'));
        }
    }
    // edit
    public function edit(string $id){
        $dogs = Dogs::query()
        ->select('*')
        ->where('dogs_id', '=', $id)
        ->get()
        ->first();

        if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
            return redirect('/');
        }
        else {
            return view('edit-dogs', compact('dogs'));
        }
    }
    // update
    public function update(Request $d, string $id){
        $dogs = Dogs::where('dogs_id', '=', $id)
        ->update(
            [
            'dog_name' => $d->input('dog_name'),
            'dog_desc' => $d->input('dog_desc'),
            'dog_health' => $d->input('dog_health'),
            'dog_grooming' => $d->input('dog_grooming'),
            'dog_exercise' => $d->input('dog_exercise'),
            'dog_training' => $d->input('dog_training'),
            'dog_nutrition' => $d->input('dog_nutrition'),
            'affectionate_with_family' => $d->input('affectionate_with_family'),
            'good_with_dogs' => $d->input('good_with_dogs'),
            'good_with_children' => $d->input('good_with_children'),
            'shedding_level' => $d->input('shedding_level'),
            'grooming_frequency' => $d->input('grooming_frequency'),
            'drooling_level' => $d->input('drooling_level'),
            'coat_type' => $d->input('coat_type'),
            'coat_length' => $d->input('coat_length'),
            'good_with_strangers' => $d->input('good_with_strangers'),
            'playful' => $d->input('playful'),
            'protective_nature' => $d->input('protective_nature'),
            'adaptability_level' => $d->input('adaptability_level'),
            'trainability_level' => $d->input('trainability_level'),
            'barking_level' => $d->input('barking_level'),
            'energy_level' => $d->input('energy_level'),
            ]
        );
        return redirect("dogs-admin");
    }
    public function delete(string $id){
        $dogs = Dogs::where('dogs_id', '=', $id)
        ->delete();
        return redirect("dogs-admin");
    }
}
