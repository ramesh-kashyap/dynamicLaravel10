<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;



class ManageUsersController extends Controller
{
   
   public function activeUsers()
    {
     
     $this->data['page'] = 'admin.users.list';
     return $this->admin_dashboard();

    }

  public function bannedUsers()
    {
     $this->data['page'] = 'admin.users.list';
     return $this->admin_dashboard();

    }

     public function showNotificationAllForm()
    {
     
     $this->data['page'] = 'admin.users.notification_single';
     return $this->admin_dashboard();

    }
//  protected function userData($scope = null)
//     {

//         if ($scope) {
//             $users = User::$scope();
//         } else {
//             $users = User::query();
//         }

//         return $users->searchable(['username'])->orderBy('id', 'desc')->paginate(getPaginate());
//     }

   
}
