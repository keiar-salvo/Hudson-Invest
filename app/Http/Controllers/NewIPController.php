<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewIP;
class NewIPController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function newinvestmentproperties()
    {
       
        return view('forms.newinvestmentproperty');
    }
    public function getNewInvestmentPropertyData($id)
    {
         try {
          
            // $data = new AddingNewInvestmentProp();
            // return $data->getAssumptionsData($id);
         
         
        } catch (Exception $e) {
        
            return response()->json(['Something went wrong!']);
        }
    }
   
}
