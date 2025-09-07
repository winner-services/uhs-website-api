<?php

use App\Http\Controllers\website\About\AboutController;
use App\Http\Controllers\website\home\homeController;
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

Route::controller(homeController::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/about-index', 'index')->name('about.index');
    Route::get('/about-details','details')->name('about.details');
});
