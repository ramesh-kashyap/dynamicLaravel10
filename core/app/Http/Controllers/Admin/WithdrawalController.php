<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Http\Controllers\Controller;

use App\Models\Withdraw;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{



  public function pending_withdraw(Request $request)
  {
    $search = $request->search;

    $notes = Withdraw::where('status', 'Pending')->orderBy('id', 'DESC');

    if (!empty($search) && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
        $q->where('amount', 'LIKE', '%' . $search . '%')
          ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('sdate', 'LIKE', '%' . $search . '%')
          ->orWhere('transaction_id', 'LIKE', '%' . $search . '%');
      });
    }

    $notes = $notes->paginate(10);

    $this->data['deposit_list'] = $notes;
    $this->data['search'] = $search;
    $this->data['page'] = 'admin.withdraw.pending-withdraw';
    return $this->admin_dashboard();
  }
  public function approve_withdraw(Request $request)
  {
    $search = $request->search;

    $notes = Withdraw::where('status', 'Approved')->orderBy('id', 'DESC');

    if (!empty($search) && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
        $q->where('amount', 'LIKE', '%' . $search . '%')
          ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('sdate', 'LIKE', '%' . $search . '%')
          ->orWhere('transaction_id', 'LIKE', '%' . $search . '%');
      });
    }

    $notes = $notes->paginate(10);

    $this->data['deposit_list'] = $notes;
    $this->data['search'] = $search;
    $this->data['page'] = 'admin.withdraw.approved-withdraw';
    return $this->admin_dashboard();
  }
  public function reject_withdraw(Request $request)
  {
    $search = $request->search;

    $notes = Withdraw::where('status', 'Failed')->orderBy('id', 'DESC');

    if (!empty($search) && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
        $q->where('amount', 'LIKE', '%' . $search . '%')
          ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('sdate', 'LIKE', '%' . $search . '%')
          ->orWhere('transaction_id', 'LIKE', '%' . $search . '%');
      });
    }

    $notes = $notes->paginate(10);

    $this->data['deposit_list'] = $notes;
    $this->data['search'] = $search;
    $this->data['page'] = 'admin.withdraw.rejected-withdraw';
    return $this->admin_dashboard();
  }
}