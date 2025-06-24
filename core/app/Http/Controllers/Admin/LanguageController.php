<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\Frontend;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Rules\FileTypeValidate;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;


class LanguageController extends Controller
{

   

     public function langManage()
    {
     
     $this->data['page'] = 'admin.setting.language';
     return $this->admin_dashboard();

    }
   
}