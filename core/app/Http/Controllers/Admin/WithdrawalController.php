<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\CryptoCurrency;
use App\Models\Transaction;
use App\Models\Wallet;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
  

    public function log()
    {
        
        return view('admin.withdraw.withdrawals');
    }

    public function details()
    {
        
        return view('admin.withdraw.detail');
    }

   
}
