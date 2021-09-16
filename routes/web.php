<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use Gloudemans\Shoppingcart\Facades\Cart;
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

/** Products Routes  */
Route::get('/boutique', [ProductController::class, 'index'])->name('boutique');
Route::get('/boutique/{slug}', [ProductController::class, 'show'])->name('products.show');

/** Cart Routes */
Route::get('/panier', [CartController::class, 'index'])->name('cart.index');
Route::post('/panier/ajouter', [CartController::class, 'store'])->name('cart.store');
Route::delete('panier/{rowId}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/videpanier', function(){
    Cart::destroy();
});


/** Checkout Routes */
Route::get('/paiement', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/paiement', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/merci', function(){
    return view('checkout.thankyou');
});