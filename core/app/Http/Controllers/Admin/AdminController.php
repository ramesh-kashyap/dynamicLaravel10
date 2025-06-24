<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Withdraw;

class AdminController extends Controller
{
   
   public function dashboard()
    {
      
     $this->data['page'] = 'admin.dashboard';
     return $this->admin_dashboard();

    }    
}
