<?php

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

/* Route for home */
Route::get('/', function () {
    if(Auth::check()) {return redirect('/products');}
    return view('landing');
});

/* Routes for authentication related pages */
Auth::routes();

Route::middleware(['auth'])->group(function() {
    /* Shop page routes */
    Route::get('/products', 'ProductController@index')->name('product-list');
    Route::get('/checkout/{id}', 'ProductController@checkout')->name('product-checkout');
    /* Stripe payment routes */
    Route::post('/ajax-get-set-up-intent', 'PaymentController@ajaxGetSetUpIntent')->name('ajax-get-set-up-intent');
    Route::post('/purchase', 'PaymentController@purchase')->name('purchase');
    /* Success page route */
    Route::get('/success', 'OrderController@success')->name('success');
    /* My orders page route */
    Route::get('/orders', 'OrderController@showOrders')->name('order-lists');         
});
