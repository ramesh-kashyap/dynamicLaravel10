<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\CryptoCurrency;
use App\Rules\FileTypeValidate;
use Illuminate\Http\Request;

class CryptoCurrencyController extends Controller
{

  public function index()
    {
     
     $this->data['page'] = 'admin.crypto.index';
     return $this->admin_dashboard();

    }
      public function form()
    {
     
     $this->data['page'] = 'admin.crypto.form';
     return $this->admin_dashboard();

    }


}
