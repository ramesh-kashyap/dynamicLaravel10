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
  

     public function pending_withdraw()
    {
        $this->data['page'] = 'admin.withdraw.pending-withdraw';
        return $this->admin_dashboard();
    }
  public function approve_withdraw()
    {
        $this->data['page'] = 'admin.withdraw.approved-withdraw';
        return $this->admin_dashboard();
    }
      public function reject_withdraw()
    {
        $this->data['page'] = 'admin.withdraw.rejected-withdraw';
        return $this->admin_dashboard();
    }
   
    

   
}
