<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('main.home'); // Make sure this blade file exists
    }
   public function contact()
    {
        return view('main.contact'); // Make sure this blade file exists
    }
     public function buyBnb()
    {
        return view('main.buy-bnb'); // Make sure this blade file exists
    }
      public function buyTrx()
    {
        return view('main.buy-trx'); // Make sure this blade file exists
    }
       public function buyTrc20()
    {
        return view('main.buy-trc20'); // Make sure this blade file exists
    }
          public function buyBep20()
    {
        return view('main.buy-bep20'); // Make sure this blade file exists
    }
}
