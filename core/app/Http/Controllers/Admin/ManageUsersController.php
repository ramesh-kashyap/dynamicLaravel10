<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;



class ManageUsersController extends Controller
{
    public function activeUsers(Request $request)
  {
    $search = $request->search;

    $notes = User::where('active_status', 'Active')->orderBy('id', 'DESC');

    if (!empty($search) && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
              $q->where('username', 'LIKE', '%' . $search . '%')
          ->orWhere('name', 'LIKE', '%' . $search . '%')
          ->orWhere('jdate', 'LIKE', '%' . $search . '%')
          ->orWhere('adate', 'LIKE', '%' . $search . '%');
      });
    }

    $notes = $notes->paginate(10);

    $this->data['deposit_list'] = $notes;
    $this->data['search'] = $search;
    $this->data['page'] = 'admin.users.active-user';
    return $this->admin_dashboard();
  }
  
 public function pendingUsers(Request $request)
  {
    $search = $request->search;

    $notes = User::where('active_status', 'Pending')->orderBy('id', 'DESC');

    if (!empty($search) && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
        $q->where('username', 'LIKE', '%' . $search . '%')
          ->orWhere('name', 'LIKE', '%' . $search . '%')
          ->orWhere('jdate', 'LIKE', '%' . $search . '%')
          ->orWhere('adate', 'LIKE', '%' . $search . '%');
      });
    }

    $notes = $notes->paginate(10);

    $this->data['deposit_list'] = $notes;
    $this->data['search'] = $search;
    $this->data['page'] = 'admin.users.pending-user';
    return $this->admin_dashboard();
  }
 public function blockUsers(Request $request)
  {
    $search = $request->search;

    $notes = User::where('active_status', 'Block')->orderBy('id', 'DESC');

    if (!empty($search) && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
              $q->where('username', 'LIKE', '%' . $search . '%')
          ->orWhere('name', 'LIKE', '%' . $search . '%')
          ->orWhere('jdate', 'LIKE', '%' . $search . '%')
          ->orWhere('adate', 'LIKE', '%' . $search . '%');
      });
    }

    $notes = $notes->paginate(10);

    $this->data['deposit_list'] = $notes;
    $this->data['search'] = $search;
    $this->data['page'] = 'admin.users.block-user';
    return $this->admin_dashboard();
  }
  
  public function totalUsers(Request $request)
  {
    $search = $request->search;

    $notes = User::orderBy('id', 'ASC');

    if ($search <> null && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
        $q->Where('name', 'LIKE', '%' . $search . '%')
          ->orWhere('username', 'LIKE', '%' . $search . '%')
          ->orWhere('email', 'LIKE', '%' . $search . '%')
          ->orWhere('phone', 'LIKE', '%' . $search . '%')
          ->orWhere('jdate', 'LIKE', '%' . $search . '%')
          ->orWhere('active_status', 'LIKE', '%' . $search . '%');
      });
    }
    $notes = $notes->paginate(10);

    $this->data['alluserlist'] =  $notes;
    $this->data['search'] = $search;
    $this->data['page'] = 'admin.users.total-user';
    return $this->admin_dashboard();
  }
    
  public function editUsers()
    {
     $this->data['page'] = 'admin.users.edit-user';
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