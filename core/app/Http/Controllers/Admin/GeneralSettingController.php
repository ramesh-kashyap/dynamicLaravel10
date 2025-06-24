<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\Frontend;


class GeneralSettingController extends Controller
{
    public function index()
    {

        return view('admin.setting.general');
    }  
}
