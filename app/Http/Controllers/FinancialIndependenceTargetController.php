<?php

namespace App\Http\Controllers;
use App\Models\FinancialIndependenceTarget;
use Illuminate\Http\Request;

class FinancialIndependenceTargetController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function initialclientpo()
    {
       
        return view('chart.financialIndependencetarget');
    }
    public function getInitialClientPO($id)
    {
        try {
                $getCurrentData = new FinancialIndependenceTarget();
                
                return $getCurrentData->currentTarget($id);
            } catch (Exception $e) {
                return response()->json(['Something went wrong!']);
            }
    }
}
