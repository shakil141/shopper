<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\BrandController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\StoreController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UpazillaController;

use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;


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

Route::resource('/',LoginController::class)->only('index','store')->middleware('guest');

Route::post('logout',[LoginController::class,'logout'])->name('logout');

Route::group([ 'prefix' => 'backend','middleware' => 'auth' ],function(){

    Route::get('/',[AdminController::class,'homepage'])->name('dashborad');

    Route::resource('product', ProductController::class);

    Route::resource('user',UserRoleController::class);

    Route::resource('role',RoleController::class);

    // brands
    Route::resource('brands', BrandController::class);

    Route::post('/save-porduct',[ProductController::class,'saveProduct'])->name('saveProduct');

    Route::resource('/categories',CategoryController::class);


});

// customer
Route::resource('customers',CustomerController::class);
Route::get('menu-wise-division/{division_id}',[CustomerController::class,'menuWiseDivision']);
Route::get('menu-wise-district/{district_id}',[CustomerController::class,'menuWiseDistrict']);

// store
Route::resource('stores',StoreController::class);

// supplier
Route::resource('suppliers',SupplierController::class);

// division
Route::resource('divisions',DivisionController::class);

// districts 
Route::resource('districts',DistrictController::class);

// upazillas
Route::resource('upzillas',UpazillaController::class);

//Route::post('/save-porduct',[ProductController::class,'saveProduct'])->name('saveProduct');

