<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\SupportMessage;
use App\Models\SupportTicket;
use App\Traits\SupportTicketManager;

class SupportTicketController extends Controller
{
 

    public function index()
    {
        $this->data['page'] = 'admin.support.reply';
        return $this->admin_dashboard();
    }
       public function tickets()
    {
        $this->data['page'] = 'admin.support.tickets';
        return $this->admin_dashboard();
    }

}
