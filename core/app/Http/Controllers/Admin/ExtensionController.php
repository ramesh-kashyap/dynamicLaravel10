<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Extension;
use Illuminate\Http\Request;

class ExtensionController extends Controller
{
   
    public function index()
    {
     
     $this->data['page'] = 'admin.setting.extensions';
     return $this->admin_dashboard();

    }

   
}
