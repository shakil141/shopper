<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\BrandController;

use App\Http\Controllers\Auth\LoginController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::resource('/',LoginController::class)->only('index','store');

Route::post('logout',[LoginController::class,'logout'])->name('logout');

Route::group(['prefix' =>'backend'],function(){

    Route::get('/',[AdminController::class,'homepage'])->name('dashborad');

    Route::resource('product', ProductController::class);
});

Route::post('/save-porduct',[ProductController::class,'saveProduct'])->name('saveProduct');

// brands
Route::resource('brands', BrandController::class);

Route::post('/save-porduct',[ProductController::class,'saveProduct'])->name('saveProduct');

Route::resource('/categories',CategoryController::class);

