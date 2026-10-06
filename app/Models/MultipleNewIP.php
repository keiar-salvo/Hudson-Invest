<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MultipleNewIP extends Model
{
    protected $table = 'multiple_new_ip';
    protected $fillable = [
        'details_id',
        'new_investment_property1_current_value',
        'new_investment_property1_retirement_value',
        'less_investment_prop1_mortgage_current_value',
        'less_investment_prop1_mortgage_retirement_value',
        'equity_investment1_current_value',
        'equity_investment1_retirement_value',
        'new_investment_property2_current_value',
        'new_investment_property2_retirement_value',
        'less_investment_prop2_mortgage_current_value',
        'less_investment_prop2_mortgage_retirement_value',
        'equity_investment2_current_value',
        'equity_investment2_retirement_value',
        'new_investment_property3_current_value',
        'new_investment_property3_retirement_value',
        'less_investment_prop3_mortgage_current_value',
        'less_investment_prop3_mortgage_retirement_value',
        'equity_investment3_current_value',
        'equity_investment3_retirement_value',
        'multi_ip_total_investment_property_value',
        'multi_ip_total_less_investment_prop_mortgage_value',
        'multi_ip_total_less_investment_prop_mortgage_retirement_value',
        'multi_ip_equity_investment_prop_port_current_value',
        'multi_ip_equity_investment_prop_port_retirement_value',
        'multi_ip_total_investment_value',
        'multi_ip_total_investment_retirement_value',
        'multi_ip_investment_portfolio_target_current_value',
        'multi_ip_investment_portfolio_target_retirement_value',
        'multi_ip_total_shortfall_value',
        'multi_ip_total_shortfall_retirement_value',
        'multi_ip_houesehold_income_target_current_value',
        'multi_ip_houesehold_income_target_retirement_value',
        'multi_ip_estimated_income_current_value',
        'multi_ip_estimated_income_retirement_value',
        'multi_ip_estimated_total_income_value',
        'multi_ip_estimated_total_income_retirement_value',
        'encoded_by',
        'date_encoded'
    ];

     public function collectionMultipleNewIP($id)
    {
        $addnewipcoll = AddingNewInvestmentProp::where('details_id',$id)->first();
        $multipleIP = MultipleNewIP::where('details_id',$id)->first();
        
        $allcollection = [
            "AddNewIP" => $addnewipcoll,
            "MultipleIP" => $multipleIP,
            ];
        return response()->json($allcollection);

     
    }

}
