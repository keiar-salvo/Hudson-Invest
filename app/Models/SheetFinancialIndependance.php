<?php

namespace App\Models;
use App\Models\Assumptions;
use Illuminate\Database\Eloquent\Model;

class SheetFinancialIndependance extends Model
{
       protected $table = 'financial_independance';

       protected $fillable = [
        'name','residential_address','phone_home','phone_mobile','email','age_client','age_partner','age_average','amount_per_week','initial_appointment_date',
        'desired_retirement_age','in_seven_years','in_fourteen_years','in_twenty_one_years'
    ];
    public function getAssumptionsData($id){
 

        $assumptionData = Assumptions::get();
        $financialIndependance = SheetFinancialIndependance::where('details_id',$id)->first();
        $result = [
                "assumptionData" => $assumptionData,
                "financialIndependance" => $financialIndependance,
                ];
                 return response()->json($result);
        
    //     return view('forms.financialindependance', [
    //    'proc' => $result
    // ]);
    }
     
}
