<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth2\AuthController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\QrCodeController;

Route::get('/', function () {
    return redirect(app()->getLocale()); // <-- Handles redirect with no locale to the current locale
});


Route::get('/generate-qrcode', [QrCodeController::class, 'generateQrCode']);

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setlocale')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

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

    Route::get('/contacts',function (){
       return view('contacts');
    })->name('contacts');

    Route::get('/developing', function () {
        return view('developing');
    })->name('developing');

    Route::get('/pricing', function () {
        return view('pricing');
    })->name('pricing');
    // end of group service


    Route::middleware('guest')->group(function () {
        Route::post('/register', [AuthController::class, 'register'])->name('register');
        //  Route::post('/login', [AuthController::class, 'login'])->name('login');
    });

    //Route::middleware('auth')->group(function (){
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    //});

});