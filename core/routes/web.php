<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/buy-bnb', 'buyBnb')->name('buy-bnb');
    Route::get('/buy-trx', 'buyTrx')->name('buy-trx');
    Route::get('/buy-trc20', 'buyTrc20')->name('buy-trc20');
    Route::get('/buy-bep20', 'buyBep20')->name('buy-bepc20');
});

