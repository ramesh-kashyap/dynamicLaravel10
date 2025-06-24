<?php

namespace App\Http\Controllers\Admin;

use App\Models\Deposit;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{
    public function deposit()
    {


        return view('admin.deposit.log');
    }

  
}
