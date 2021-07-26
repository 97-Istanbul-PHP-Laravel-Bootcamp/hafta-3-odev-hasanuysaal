<?php

use App\Http\Controllers\Admin;
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



//url admin adı ile oluşturulduğundan oluşan sorundan dolayı sonda iki n ile url oluşturuldu
Route::prefix('adminn')->group(function () {
    Route::get('/', [Admin\HomeController::class, 'index']);

});
