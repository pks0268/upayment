<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'products'], function (){
    Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
    Route::group(['middleware' => 'auth'], function (){
        Route::get('/addnew', [App\Http\Controllers\ProductController::class, 'addnew'])->name('products.addnew');
        Route::post('/', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    });
});

Route::get('/cart', function (){})->name('cart');
