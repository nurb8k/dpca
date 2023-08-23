<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/news-detail', function () {
    return view('news_detail');
})->name('news-detail');

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
