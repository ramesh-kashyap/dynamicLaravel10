<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Trade;
use App\Models\Transaction;
use App\Models\Wallet;
use App\Rules\FileTypeValidate;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ManageTradeController extends Controller
{
   

  
      public function index()
    {
     
     $this->data['page'] = 'admin.trade.index';
     return $this->admin_dashboard();

    }

}
