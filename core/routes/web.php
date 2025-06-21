<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});

Route::get('/', function () {
    return view('welcome');
});

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

