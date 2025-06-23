<?php

use Illuminate\Support\Facades\Route;

// Route::namespace('Auth')->group(function () {
    Route::controller('LoginController')->group(function () {
        Route::get('/', 'showLoginForm')->name('login');
        Route::post('/login', 'login')->name('login');
        Route::get('logout', 'logout')->middleware('admin')->name('logout');
    // });

  
});