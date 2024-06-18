<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VetController;

Route::get('/', function () {
    if (Session::has('id') && Session::get('role') == 0) {
        return view('welcome');
    }
    elseif (Session::has('id') && Session::get('role') == 1) {
        return redirect('/dogs-admin');
    } 
    else {
        return view('welcome');
    }
});

// User Controller
Route::get('/signup', [UserController::class, 'signup_page']);
Route::post('/signup', [UserController::class, 'signup']);
Route::get('/noaccount/signup', [UserController::class, 'please_signup']);

Route::get('/login', [UserController::class, 'login_page']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/logout-login', [UserController::class, 'logout_login']);

Route::get('/logout', [UserController::class, 'logout']);
Route::get('/services', [UserController::class, 'view_services']);
Route::get('/products', [UserController::class, 'view_products']);

// Dogs Controller
Route::get('/dogs-admin', [DogsController::class, 'index']);
Route::get('/dogs-admin/create-dogs', [DogsController::class, 'create_dog']);
Route::post('/dogs-admin', [DogsController::class, 'create']);

Route::get('/dogs-admin/{id}',[DogsController::class, 'view']);

Route::get('/dogs-admin/edit-dogs/{id}', [DogsController::class, 'edit']);
Route::put('/dogs-admin/{id}', [DogsController::class, 'update']);

Route::delete('/dogs-admin/{id}',[DogsController::class, 'delete']);

// Vet Controller
Route::get('/vet-admin',[VetController::class, 'index']);
Route::get('/vet-admin/{id}',[VetController::class, 'view']);
Route::put('/vet-admin/edit/{id}',[VetController::class, 'update_products']);
Route::get('/vet-admin/edit/{id}', [VetController::class, 'edit']);
Route::get('/select-package', [VetController::class, 'select']);
Route::get('/package/a', [VetController::class, 'selectA']);
Route::get('/package/b', [VetController::class, 'selectB']);
Route::get('/package/c', [VetController::class, 'selectC']);
Route::post('/vet-admin/finish', [VetController::class, 'create_vet']);
Route::delete('/vet-admin/{id}',[VetController::class, 'delete']);

// adding products
Route::get('create-products/{id}', [VetController::class, 'create_products']);
Route::post('create-products/{id}', [VetController::class, 'create']);