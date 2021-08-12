<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[AdminController::class,'homepage'])->name('dashborad');


Route::get('/add-product',[ProductController::class,'addProduct'])->name('new-product');

Route::post('/save-porduct',[ProductController::class,'saveProduct'])->name('saveProduct');

// brands
Route::resource('brands', BrandController::class);