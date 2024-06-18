<?php

namespace App\Http\Controllers;
use App\Models\UserTable;
use App\Models\Dogs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function please_signup() {
        toastr()->error('Please Signup to Proceed, Thanks!', ['timeOut' => 10000]);
        return redirect('/signup');
    }
    public function signup_page(){
        if (Session::has('id') && Session::get('role') == 0) {
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
        if (Session::has('id') && Session::get('role') == 0) {
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
        return view("services");
    }
    public function view_products(){
        return view("products");
    }
}
