<?php


use Illuminate\Support\Facades\Route;

Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});


Route::controller('SiteController')->group(function () {

    Route::get('/', 'index')->name('home');
});
