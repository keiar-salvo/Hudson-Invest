<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SheetFinancialIndependance;
use App\Models\Assumptions;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Hash;
use DB;

class SheetFinancialIndependanceController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

        public function financialindependance()
    {
        return view('forms.financialindependance');
    }
    public function assumptionsData(Request $request){
        try {
          
            $data = new SheetFinancialIndependance();
            return $data->getAssumptionsData($request);
         
         
        } catch (Exception $e) {
        
            return response()->json(['Something went wrong!']);
        }
    }
}
