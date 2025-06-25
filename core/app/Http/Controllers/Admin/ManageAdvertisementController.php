<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\Advertisement;

class ManageAdvertisementController extends Controller
{

      public function index()
    {
     
     $this->data['page'] = 'admin.advertisement.index';
     return $this->admin_dashboard();

    }
}
