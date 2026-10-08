<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientPOWithIPGraph extends Model
{
      public function renderChartData($id)
    {
        $FinancialIndependence = FinancialIndependence::where('details_id',$id)->first();
        $CurrentPosition = CurrentPosition::where('details_id',$id)->first();
        $AddingNewIP = AddingNewInvestmentProp::where('details_id',$id)->first();
        $FinIndependance = SheetFinancialIndependance::where('details_id',$id)->first();
        $MultipleNewIP = MultipleNewIP::where('details_id',$id)->first();

            $collection = [
                "timeframe" =>[
                    "start" => "Today",
                    "end" => $FinancialIndependence['years_to_target_age'] . " Years",
                ],
                "inital_assets" =>400000,
                "endpoints" => [
                "financialIndependence" => $FinancialIndependence,
                "currentposition" => $CurrentPosition,
                "addingnewip" => $AddingNewIP,
                "finIndependance" => $FinIndependance,
                "multiplenewip" => $MultipleNewIP
                ]
              
                ];
                 return response()->json($collection);
    }
        
}
