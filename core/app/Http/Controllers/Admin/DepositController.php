<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investment;
class DepositController extends Controller
{

    public function deposit_pending(Request $request)
{
    $search = $request->search;
    
    // Filter only pending and sort by latest
    $notes = Investment::where('status', 'Pending')->orderBy('id', 'DESC');

    // Search filter
    if (!empty($search) && $request->reset != "Reset") {
        $notes = $notes->where(function($q) use($search){
            $q->where('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('sdate', 'LIKE', '%' . $search . '%')
              ->orWhere('transaction_id', 'LIKE', '%' . $search . '%');
        });
    }

    // Pagination (10 records per page)
    $notes = $notes->paginate(10);

    $this->data['deposit_list'] = $notes;
    $this->data['search'] = $search;
    $this->data['page'] = 'admin.deposit.pending-deposit';
    return $this->admin_dashboard();
}

   public function deposit_approve()
    {
        $this->data['page'] = 'admin.deposit.approved-deposit';
        return $this->admin_dashboard();
    }
   public function deposit_reject()
    {
        $this->data['page'] = 'admin.deposit.rejected-deposit';
        return $this->admin_dashboard();
    }

    public function deposit_request(Request $request)
    {
        
        $this->data['page'] = 'admin.deposit.deposit-request';
        return $this->admin_dashboard();
    }

  
}
