<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('order',[Controllers\OrderController::class,'store'])->name('orders.store');
Route::get('order/{order}/upsell',[Controllers\OrderController::class,'upsell'])->name('upsell');
Route::post('order/{order}/add-to-cart',[Controllers\OrderController::class,'addToCart'])->name('add-to-cart');
Route::post('order/{order}/finish-order',[Controllers\OrderController::class,'finishOrder'])->name('finish-order');

Route::prefix('product')->group(function (){
   Route::get('uzay-bulut-robotu',[Controllers\ProductController::class,'show']);
   Route::view('uzay-bulut-robotu-2','products.uzay-bulut-robotu-2');
   Route::view('test','products.test');
});


Route::get('city/{city}/districts',[Controllers\OrderController::class,'getDistrictsByCity'])->name('getDistrictsByCity');
Route::get('district/{district}/neighborhoods',[Controllers\OrderController::class,'getNeighborhoodsByDistrict'])->name('getNeighborhoodsByDistrict');
