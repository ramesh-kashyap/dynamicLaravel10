<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\Frontend;


class GeneralSettingController extends Controller
{
   
    public function logoIcon()
{
      
     $this->data['page'] = 'admin.setting.logo_icon';
     return $this->admin_dashboard();

    }
      public function index()
    {

        $this->data['page'] = 'admin.setting.general';
        return $this->admin_dashboard();
    }

    
      public function apiIndex()
    {
        $this->data['page'] = 'admin.setting.api_setting';
        return $this->admin_dashboard();
    }
}
