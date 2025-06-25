<?php

namespace App\Http\Controllers\Admin;

use App\Models\Deposit;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{

      public function deposit_pending()
    {
        $this->data['page'] = 'admin.deposit.pending-deposit';
        return $this->admin_dashboard();
    }
   public function deposit_approve()
    {
        $this->data['page'] = 'admin.deposit.approved-deposit';
        return $this->admin_dashboard();
    }
   public function deposit_reject()
    {
        $this->data['page'] = 'admin.deposit.rejected-deposit';
        return $this->admin_dashboard();
    }


  
}
