<?php

namespace App\Http\Controllers\Admin;

use App\Models\Deposit;
use App\Http\Controllers\Controller;

class BonusController extends Controller
{

      public function direct_income()
    {
        $this->data['page'] = 'admin.bonus.direct-income';
        return $this->admin_dashboard();
    }
   public function level_income()
    {
        $this->data['page'] = 'admin.bonus.level-income';
        return $this->admin_dashboard();
    }


}
