<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "2241727017, Irfan Purwo Saputro, TI4J";
});

Route::get('/articles/{id}', function ($id) {
    echo "Ini merupakan halaman artikel ". $id;
});

Route::get('/home',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'index']);
Route::get('/articles/{id}',[ArticleController::class, 'index']);




