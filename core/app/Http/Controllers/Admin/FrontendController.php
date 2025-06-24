<?php

namespace App\Http\Controllers\Admin;

use App\Models\Frontend;
use App\Http\Controllers\Controller;
use App\Rules\FileTypeValidate;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

  
  
 public function seoEdit()
    {
     
     $this->data['page'] = 'admin.setting.sco_manager';
     return $this->admin_dashboard();

    }


}
