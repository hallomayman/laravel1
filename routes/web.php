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
Route::get('about', function () {
    return view('shope/about');
});
Route::get('index', function () {
    return view('shope/index');
});
Route::get('cart', function () {
    return view('shope/cart');
});
Route::get('contact-us', function () {
    return view('shope/contact-us');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth','isAdmin'])->group (function() {
    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);

    //Store Route
    Route::get('store',[App\Http\Controllers\Admin\StoreController::class,'index']);
    Route::get('store/create',[App\Http\Controllers\Admin\StoreController::class,'create']);
    Route::post('stores',[App\Http\Controllers\Admin\StoreController::class,'store']);


}

);
