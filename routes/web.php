<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Start Auth*/

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/');
    }
    return view('auth.login');
})->name('login');

Route::post('/signIn', [AuthController::class, 'signIn'])->name('signIn');

Route::post('/signUp', [AuthController::class, 'signUp'])->name('signUp');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');


/*End Auth*/

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');


Route::get('/', [ProductController::class, 'shopIndex'])->name('pet-shop/main')->name('home');

Route::get('/pet-shop/about', [PetController::class, 'about'])->name('pet-shop/about');
Route::get('/pet-shop/details', [ProductController::class, 'productDetails'])->name('details');
Route::get('/pet-shop/food', [ProductController::class, 'shopList'])->name('food');
Route::get('/add-cart', [ProductController::class, 'addCart'])->name('add-cart');

Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout')->middleware('auth');

Route::post('order', [ProductController::class, 'order'])->name('order')->middleware('auth');

    Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
