<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assumptions;

class AssumptionsController extends Controller
{
      public function assumptionrates()
    {
        return view('settings.assumptions');
    }

        public function storeAssumptionsDetails(Request $request)
    {
         try {
        

           
            $details = new Assumptions();
            return $details->saveAssumptionsDetails($request);
       
         
        } catch (Exception $e) {
        
            return response()->json(['Something went wrong!']);
        }
    }

    public function assumptionsData(Request $request){
        try {
          
            $data = new Assumptions();
            return $data->getAssumptions($request);
         
         
        } catch (Exception $e) {
        
            return response()->json(['Something went wrong!']);
        }
    }

    public function updateRates(Request $request){
         try {
          
            $newrates = new Assumptions();
            return $newrates->updateExistingRates($request);
         
         
        } catch (Exception $e) {
        
            return response()->json(['Something went wrong!']);
        }
    }
}
