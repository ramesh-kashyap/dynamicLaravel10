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
     
}
