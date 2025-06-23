<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;



class AdminController extends Controller
{
      public function index()
    {     
     
     $this->data['page'] = 'admin.dashboard';
     return $this->admin_dashboard();
     
    } 

   
}
