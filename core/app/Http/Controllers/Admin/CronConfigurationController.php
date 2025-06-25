<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class CronConfigurationController extends Controller
{
     public function cronJobs()
    {
        $this->data['page'] = 'admin.cron.index';
        return $this->admin_dashboard();
    }


   public function schedule()
    {
        $this->data['page'] = 'admin.cron.schedule';
        return $this->admin_dashboard();
    }

   
}
