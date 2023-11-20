<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth2\AuthController;
use App\Http\Controllers\News\NewsController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::middleware('auth')->group(function (){
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::middleware('guest')->group(function () {
        Route::post('/register', [AuthController::class, 'register'])->name('register');
    //  Route::post('/login', [AuthController::class, 'login'])->name('login');
    });

    //Route::middleware('auth')->group(function (){
        Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    //});


    // group service
        Route::get('/news-detail', function () {
            return view('news_detail');
        })->name('news-detail');

        Route::resource('news', NewsController::class);

        Route::get('/how-we-help', function () {
            return view('help.index');
        })->name('help.index');

        Route::get('/advantage', function () {
            return view('advantage');
        })->name('advantage');

        Route::get('/developing', function () {
            return view('developing');
        })->name('developing');

        Route::get('/pricing', function () {
            return view('pricing');
        })->name('pricing');
    // end of group service
});;
