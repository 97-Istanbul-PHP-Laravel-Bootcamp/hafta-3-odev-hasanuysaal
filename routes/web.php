<?php

use App\Http\Controllers\Admin;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|  ctrl alt l
*/

Route::get('/', function () {
    return view('welcome');
});


//url admin adı ile oluşturulduğunda oluşan sorundan dolayı sonda iki n harfi ile url oluşturuldu
Route::prefix('adminn')->name('admin.')->group(function () {

    Route::get('/', [Admin\HomeController::class, 'index'])->name('home');

    //'category/create' url i kullanıldığında 404 not found hatası ile karşılaştığımdan farklı bir url adresi kullandım.
    //Route::get('category/add',[Admin\CategoryController::class , 'create'])->name('category.add');
    Route::get('category/{id}',[Admin\CategoryController::class , 'destroy'])->name('category.delete');
    Route::get('categry/add',[Admin\CategoryController::class , 'create'])->name('category.add');
    Route::resource('category',Admin\CategoryController::class)->except(['show', 'create']);

    Route::get('product/delete/{id}',[Admin\ProductController::class , 'destroy'])->name('product.delete');
    Route::resource('product',Admin\ProductController::class)->except('show');

    Route::get('user/delete/{id}',[Admin\UserController::class, 'destroy'])->name('user.delete');
    Route::resource('user',Admin\UserController::class)->except('show');

    Route::prefix('cart')->name('cart')->group( function() {
        Route::get('index', [Admin\CartController::class, 'index'])->name('.list');
        Route::get('view/{id}', [Admin\CartController::class, 'show'])->name('.show');
    });

});
