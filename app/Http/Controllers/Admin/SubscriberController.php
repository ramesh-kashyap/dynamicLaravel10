<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
       
        return view('admin.subscriber.index');
    }

    public function sendEmailForm()
    {
      
        return view('admin.subscriber.send_email');
    }

 
}
