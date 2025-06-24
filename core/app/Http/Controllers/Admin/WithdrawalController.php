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
        $this->data['page'] = 'admin.withdraw.withdrawals';
        return $this->admin_dashboard();
    }

    public function details()
    {
        $this->data['page'] = 'admin.withdraw.detail';
        return $this->admin_dashboard();

        
    }

   
}
