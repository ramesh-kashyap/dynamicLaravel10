<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentWindow;
use Illuminate\Http\Request;

class PaymentWindowController extends Controller
{
    public function index()
    {
        
        return view('admin.fiat.payment_window');
    }

 
}
