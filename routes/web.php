<?php

use Illuminate\Support\Facades\Route;
use App\Models\bebida;
use App\Models\boleta;
use App\Models\categorias_bebida;
use App\Models\compra;
use App\Models\deliverista;
use App\Models\stock;
use App\Models\user;
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
Route::get('/bebida', function () {
    return  bebida::All();
});
Route::get('/boleta', function () {
    return  boleta::All();
});
Route::get('/categorias_bebida', function () {
    return  categorias_bebida::All();
});
Route::get('/compra', function () {
    return  compra::All();
});
Route::get('/deliverista', function () {
    return  deliverista::All();
});
Route::get('/stock', function () {
    return  stock::All();
});
Route::get('/user', function () {
    return  user::All();
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
