<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yearly_Investment_Portfolio extends Model
{
     protected $table = 'yearly__investment__portfolios';
    protected $fillable = [
        'details_id','year','total_liabilities_client','yearly_value','encoded_by','date_encoded'
    ];
   protected $casts = [
        'year' => 'array',
        'yearly_value' => 'array',
    ];

    public function currentYearlyData($id){
        $investment_portfolio= Yearly_Investment_Portfolio::where('details_id',$id)->first();
        $assumptionData = Assumptions::get();
        $financialIndependance = SheetFinancialIndependance::where('details_id',$id)->first();
                 $result = [
                "investmentportfolio" => $investment_portfolio,
                "assumptionData" => $assumptionData,
                "financialIndependance" => $financialIndependance,
                ];
                 return response()->json($result);
        
        // return response()->json($collection);
    }
}
