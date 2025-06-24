<?php

namespace App\Http\Controllers\Admin;

use App\Models\Deposit;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{

      public function deposit()
    {
        $this->data['page'] = 'admin.deposit.log';
        return $this->admin_dashboard();
    }


  
}
