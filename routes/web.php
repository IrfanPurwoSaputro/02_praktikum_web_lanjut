<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndexController;

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
    return redirect('https://www.educastudio.com/');
});

// Route::get('/about', function () {
//     echo "2241727017, Irfan Purwo Saputro, Web B";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Ini merupakan halaman artikel ". $id;
// });

// Route::get('/home',[Pagecontroller::class, 'index']);
// Route::get('/about',[Pagecontroller::class, 'about']);
// Route::get('/articles/{id}',[Pagecontroller::class, 'articles']);

// Route::get('home', Homecontroller::class);
// Route::get('about',AboutController::class);
// Route::get('articles/{id}',ArticleController::class);

Route::prefix('category')->group(function () {
    Route::get('/marbel-and-friends-kids-games', function () {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });
    Route::get('/riri-story-books', function () {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });
    Route::get('/kolak-kids-songs', function () {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

Route::get('news/{title?}', function ($title = null) {
    return redirect('https://www.educastudio.com/news/'.$title);
});

Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return redirect('https://www.educastudio.com/program/karir');
    });
    Route::get('/magang', function () {
        return redirect('https://www.educastudio.com/program/magang');
    });
    Route::get('/kunjungan-industri', function () {
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});

Route::resource('contact', ContactController::class);











Auth::routes();

Route::get('/home', [IndexController::class, 'index'])->name('home');


