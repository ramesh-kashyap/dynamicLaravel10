<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Lib\FormProcessor;
use Illuminate\Http\Request;

class KycController extends Controller
{
  
    public function setting()
    {
     
     $this->data['page'] = 'admin.setting.kyc_setting';
     return $this->admin_dashboard();

    }

   
}
