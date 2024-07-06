<?php

use App\Http\Controllers\TagController;
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
Route::get('order/{order}/tesekkurler',[Controllers\OrderController::class,'thankyou'])->name('thankyou');
Route::post('order/{order}/add-to-cart',[Controllers\OrderController::class,'addToCart'])->name('add-to-cart');
Route::post('order/{order}/finish-order',[Controllers\OrderController::class,'finishOrder'])->name('finish-order');

Route::prefix('product')->group(function (){
   Route::get('uzay-bulut-robotu',[Controllers\ProductController::class,'show']);
   Route::get('miknatisli-lamba',[Controllers\ProductController::class,'show2']);
   Route::view('uzay-bulut-robotu-2','products.uzay-bulut-robotu-2');
   Route::view('test','products.test');
});


Route::get('city/{city}/districts',[Controllers\OrderController::class,'getDistrictsByCity'])->name('getDistrictsByCity');
Route::get('district/{district}/neighborhoods',[Controllers\OrderController::class,'getNeighborhoodsByDistrict'])->name('getNeighborhoodsByDistrict');

Route::post('save-fcm-token',[Controllers\UserDevicesController::class,'store'])->name('save.fcm_token');
Route::get('send-notification',[Controllers\UserDevicesController::class,'sendNotification'])->name('send.fcm_token');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('admin/orders/store', [Controllers\AdminController::class, 'storeOrder'])->name('admin.order.store');
    Route::post('admin/orders/{order}/update', [Controllers\AdminController::class, 'updateOrder'])->name('admin.order.update');
    Route::post('/admin/orders/{order}', [Controllers\AdminController::class, 'orderDestroy'])->name('admin.order.orderDestroy');

    Route::post('/tags', [TagController::class, 'store'])->name('tags.store');
    Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/legal/{key}', [App\Http\Controllers\LegacyController::class, 'legalShow'])->name('legal.show');
