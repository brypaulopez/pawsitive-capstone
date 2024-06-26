<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VetController;
use App\Http\Controllers\ProductController;
use App\Models\CartTable;
use App\Models\UserReview;

Route::get('/', function () {
    if (Session::has('id') && Session::get('role') == 0 || Session::get('role') == 3) {
        $showCart = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->get();

        $showOrder = CartTable::query()
        ->select('*')
        ->where('product_user_id', '=', Session::get('id'))
        ->where('zipcode', '=', 0)
        ->get();

        $reviews = UserReview::all();
        return view('welcome', compact('showCart', 'reviews', 'showOrder'));
    }
    elseif (Session::has('id') && Session::get('role') == 1) {
        return redirect('/dogs-admin');
    } 
    else {
        return view('welcome');
    }
});

// User Controller - Extra layer of security (access)
Route::get('/signup', [UserController::class, 'signup_page']);
Route::post('/signup', [UserController::class, 'signup']);
Route::get('/noaccount/signup', [UserController::class, 'please_signup']);

Route::get('/login', [UserController::class, 'login_page']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout-login', [UserController::class, 'logout_login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/services', [UserController::class, 'view_services']);
Route::get('/products', [UserController::class, 'view_products']);
Route::post('/products/{id}', [UserController::class, 'cart']);
Route::get('/products/{id}', [UserController::class, 'single_page']);
Route::delete('/remove-cart/{id}', [UserController::class, 'delete_cart']);

// Dogs Controller - Extra layer of security (access)
Route::get('/dogs-admin', [DogsController::class, 'index']);
Route::get('/dogs-admin/create-dogs', [DogsController::class, 'create_dog']);
Route::post('/dogs-admin', [DogsController::class, 'create']);
Route::get('/dogs-admin/{id}',[DogsController::class, 'view']);
Route::get('/dogs-admin/edit-dogs/{id}', [DogsController::class, 'edit']);
Route::put('/dogs-admin/{id}', [DogsController::class, 'update']);
Route::delete('/dogs-admin/{id}',[DogsController::class, 'delete']);
Route::get('/breeds', [DogsController::class, 'breeds']);
Route::post('/breeds/{letter}', [DogsController::class, 'breed_checker']);
Route::get('/breeds/{letter}', [DogsController::class, 'breed_checker']);
Route::get('traits/{name}', [DogsController::class, 'specific_breed']);
// Route::post('/breeds/{name}', [DogsController::class, 'specific_breed']);

// Vet Controller - Extra layer of security (access)
Route::get('/vet-admin',[VetController::class, 'index']);
Route::get('/vet-admin/{id}',[VetController::class, 'view']);
Route::get('/select-package', [VetController::class, 'select']);
Route::get('/package/n', [VetController::class, 'selectN']);
Route::get('/package/a', [VetController::class, 'selectA']);
Route::get('/package/b', [VetController::class, 'selectB']);
Route::get('/package/c', [VetController::class, 'selectC']);
Route::post('/vet-admin', [VetController::class, 'create_vet']);
Route::delete('/vet-admin/{id}',[VetController::class, 'delete']);

// adding products - Extra layer of security (access)
Route::get('create-products/{id}', [VetController::class, 'create_products']);
Route::post('create-products/{id}', [VetController::class, 'create']);
Route::get('/vet-admin/edit/{id}', [VetController::class, 'edit']);
Route::put('/vet-admin/edit/{id}',[VetController::class, 'update_products']);
Route::delete('/vet-admin/back/{id}',[VetController::class, 'delete_products']);

// adding grooming - Extra layer of security (access)
Route::get('create-groom/{id}', [VetController::class, 'create_groom']);
Route::post('create-groom/{id}', [VetController::class, 'createG']);
Route::get('/vet-admin/groom/{id}', [VetController::class, 'editG']);
Route::put('/vet-admin/groom/{id}',[VetController::class, 'updateG']);
Route::delete('/vet-admin/groom/{id}',[VetController::class, 'deleteG']);

// adding boarding - Extra layer of security (access)
Route::get('create-board/{id}', [VetController::class, 'create_boarding']);
Route::post('create-board/{id}', [VetController::class, 'createB']);
Route::get('/vet-admin/board/{id}', [VetController::class, 'editB']);
Route::put('/vet-admin/board/{id}',[VetController::class, 'updateB']);

// client side Routing - mix controllers - Extra layer of security (access)
Route::get('/partnership', [VetController::class, 'select']);
Route::post('/payment', [VetController::class, 'create_vet']);
Route::get('/payment', [VetController::class, 'editing']);
Route::post('/payment-success', [VetController::class, 'account']);
Route::get('/medicines', [UserController::class, 'medicines']);
Route::get('/foods', [UserController::class, 'foods']);
Route::get('/grooming', [UserController::class, 'grooming']);
Route::get('/accessories', [UserController::class, 'accessories']);
Route::get('/search-clinic', [UserController::class, 'search_clinic']);
Route::post('/clinic', [UserController::class, 'clinic']);
Route::get('/clinic', [UserController::class, 'clinic']);
Route::get('/clinic/{id}', [UserController::class, 'specific_clinic']);
Route::get('/search-grooming', [UserController::class, 'search_grooming']);
Route::post('/groom', [UserController::class, 'groom']);
Route::get('/groom', [UserController::class, 'groom']);
Route::get('/groom/{id}', [UserController::class, 'specific_groom']);
Route::get('/search-boarding', [UserController::class, 'search_boarding']);
Route::post('/board', [UserController::class, 'board']);
Route::get('/board', [UserController::class, 'board']);
Route::get('/board/{id}', [UserController::class, 'specific_board']);
Route::get('/user-profile', [UserController::class, 'user_profile']);
Route::post('/user-profile', [UserController::class, 'review']);
Route::get('/about-us', [UserController::class, 'about']);
Route::post('/order', [ProductController::class, 'order']);
Route::get('/trainer-signup', [ProductController::class, 'trainer']);
Route::post('/trainer-creation', [ProductController::class, 'creation']);
Route::get('/search-trainer', [ProductController::class, 'trainer_view']);
Route::post('/trainer', [ProductController::class, 'trainer_show']);
Route::get('/trainer', [ProductController::class, 'trainer_show']);
Route::post('/email-notif', [ProductController::class, 'email']);
Route::get('/email-notif', [ProductController::class, 'email']);