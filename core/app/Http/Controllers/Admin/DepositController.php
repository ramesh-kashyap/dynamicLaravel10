<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investment;
class DepositController extends Controller
{

      public function deposit_pending(Request $request)
    {

        // $limit = $request->limit ? $request->limit : paginationLimit();
        // $status = $request->status ? $request->status : null;
        // $search = $request->search ? $request->search : null;
        $notes = Investment::all();
        dd($notes);
    //     if($search <> null && $request->reset!="Reset"){
    //         $notes = $notes->where(function($q) use($search){
    //           $q->Where('amount', 'LIKE', '%' . $search . '%')
    //           ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
    //           ->orWhere('sdate', 'LIKE', '%' . $search . '%')
    //           ->orWhere('status', 'LIKE', '%' . $search . '%')
    //           ->orWhere('transaction_id', 'LIKE', '%' . $search . '%');
    //         });

    //       }
    // $notes = $notes->paginate($limit)
    //     ->appends([
    //         'limit' => $limit
    //     ]);

        $this->data['deposit_list'] =  $notes;
        // $this->data['search'] = $search;
        $this->data['page'] = 'admin.deposit.pending-deposit';
        return $this->admin_dashboard();
    }

      public function deposit_approve(Request $request)
    {

        // $limit = $request->limit ? $request->limit : paginationLimit();
        // $status = $request->status ? $request->status : null;
        // $search = $request->search ? $request->search : null;
        $notes = Investment::all();
    //     if($search <> null && $request->reset!="Reset"){
    //         $notes = $notes->where(function($q) use($search){
    //           $q->Where('amount', 'LIKE', '%' . $search . '%')
    //           ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
    //           ->orWhere('sdate', 'LIKE', '%' . $search . '%')
    //           ->orWhere('status', 'LIKE', '%' . $search . '%')
    //           ->orWhere('transaction_id', 'LIKE', '%' . $search . '%');
    //         });

    //       }
    // $notes = $notes->paginate($limit)
    //     ->appends([
    //         'limit' => $limit
    //     ]);

        $this->data['deposit_list'] =  $notes;
        // $this->data['search'] = $search;
        $this->data['page'] = 'admin.deposit.approved-deposit';
        return $this->admin_dashboard();
    }
//    public function deposit_approve()
//     {
//         $this->data['page'] = 'admin.deposit.approved-deposit';
//         return $this->admin_dashboard();
//     }
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
