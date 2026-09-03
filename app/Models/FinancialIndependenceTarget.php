<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialIndependenceTarget extends Model

{
    protected $table = 'financial_independence_targets';
    protected $fillable = [
        'details_id','current_net_financial_assets','total_investment_portfolio_required','total_annual_household_income_retirement','encoded_by','date_encoded'
    ];
     public function currentTarget($id){

        $initial= FinancialIndependenceTarget::where('details_id',$id)->first();
     
                //  $result = [
                // "investmentportfolio" => $investment_portfolio,
                // "assumptionData" => $assumptionData,
                // "financialIndependance" => $financialIndependance,
                // ];
                 return response()->json($initial);
        
        // return response()->json($collection);
    }
}
