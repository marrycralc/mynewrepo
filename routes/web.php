<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudProducts;
use App\Http\Controllers\UpadteproductController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// /((Admin page get urls))\
Route::get('/webs', function () {
    return view('auth.webscoket');
});

Route::get('/', function () {
    return view('auth.productshop');
});
Route::get('/admin', function () {
    return view('auth.adminuser');
});
Route::get('/newproduct', function () {
    return view('auth.createproduct');
});

Route::get('/myaccount', function () {
    return view('auth.myaccount');
});

Route::get('/cartshow', [CartController::class, 'cartshow'])->name('after.cart');
Route::get('/cartshow/add-to-cart/{id}', [CartController::class, 'addtocart'])->name('add.to.cart');
Route::get('/product-form', [CrudProducts::class, 'showproduts']);
Route::get('/newproduct', [CrudProducts::class, 'showproduts'])->name('prodcut.newproduct');
Route::get('/editproduct/{id}', [CrudProducts::class, 'editproducts'])->name('prodcut.editproduct');
Route::post('/editproduct/{id}', [CrudProducts::class, 'updateproduct'])->name('prodcut.updateproduct');
Route::delete('/product/{id}', [CrudProducts::class, 'deleteproduct'])->name('product.deleteproduct');


// /((Admin page post urls))\

Route::post('/newproduct', [CrudProducts::class, 'storeproduct'])->name('prodcut.add');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
