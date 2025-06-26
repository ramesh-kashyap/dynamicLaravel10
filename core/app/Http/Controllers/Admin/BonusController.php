<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Models\Income;
use App\Http\Controllers\Controller;

class BonusController extends Controller
{

      public function direct_income(Request $request)
    {
         $search = $request->search;
    
       $notes = Income::where('remarks','Direct Bonus')->orderBy('id', 'DESC');

       if (!empty($search) && $request->reset != "Reset") {
            $notes = $notes->where(function($q) use($search){
            $q->Where('comm', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')

              ->orWhere('ttime', 'LIKE', '%' . $search . '%');
        });
    }

       $notes = $notes->paginate(10);
        $this->data['direct_incomes'] = $notes;
        $this->data['page'] = 'admin.bonus.direct-income';
        return $this->admin_dashboard();
    }
   public function level_income(Request $request)
    {

        $search = $request->search;
    
       $notes = Income::where('remarks','Level Bonus')->orderBy('id', 'DESC');

       if (!empty($search) && $request->reset != "Reset") {
            $notes = $notes->where(function($q) use($search){
            $q->Where('comm', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')

              ->orWhere('ttime', 'LIKE', '%' . $search . '%');
        });
    }

       $notes = $notes->paginate(10);
        $this->data['direct_incomes'] = $notes;
        $this->data['page'] = 'admin.bonus.level-income';
        return $this->admin_dashboard();
    }


}
