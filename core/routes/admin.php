<?php
namespace App\Http\Controllers\Admin\Auth;
use Illuminate\Support\Facades\Route;

    


      Route::controller('LoginController')->group(function () {
        Route::get('/', 'showLoginForm')->name('login');
    }); 
   
  
