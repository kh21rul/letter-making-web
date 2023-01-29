<?php

use App\Http\Controllers\DomisiliController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/error', function () {
    return view('errors.404');
});

Route::get('/domisili', [DomisiliController::class, 'index']);
Route::get('/domisili/cetak_pdf', [DomisiliController::class, 'cetak_pdf']);
