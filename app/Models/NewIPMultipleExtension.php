<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewIPMultipleExtension extends Model
{
   protected $table = 'multiple_ip_extension';
   protected $fillable = [
        'details_id',
        'new_investment_property4_current_value',
        'new_investment_property4_retirement_value',
        'less_investment_prop4_mortgage_current_value',
        'less_investment_prop4_mortgage_retirement_value',
        'equity_investment4_current_value',
        'equity_investment4_retirement_value',
        'new_investment_property5_current_value',
        'new_investment_property5_retirement_value',
        'less_investment_prop5_mortgage_current_value',
        'less_investment_prop5_mortgage_retirement_value',
        'equity_investment5_current_value',
        'equity_investment5_retirement_value',
        'new_investment_property6_current_value',
        'new_investment_property6_retirement_value',
        'less_investment_prop6_mortgage_current_value',
        'less_investment_prop6_mortgage_retirement_value',
        'equity_investment6_current_value',
        'equity_investment6_retirement_value',
        'new_investment_property7_current_value',
        'new_investment_property7_retirement_value',
        'less_investment_prop7_mortgage_current_value',
        'less_investment_prop7_mortgage_retirement_value',
        'equity_investment7_current_value',
        'equity_investment7_retirement_value',
        'multi_ext_total_investment_property_value',
		'multi_ext_total_investment_property_retirement_value',
        'multi_ext_total_less_investment_prop_mortgage_value',
        'multi_ext_total_less_investment_prop_mortgage_retirement_value',
        'multi_ext_equity_investment_prop_port_current_value',
        'multi_ext_equity_investment_prop_port_retirement_value',
        'multi_ext_total_investment_value',
        'multi_ext_total_investment_retirement_value',
        'multi_ext_investment_portfolio_target_current_value',
        'multi_ext_investment_portfolio_target_retirement_value',
        'multi_ext_total_shortfall_value',
        'multi_ext_total_shortfall_retirement_value',
        'multi_ext_houesehold_income_target_current_value',
        'multi_ext_houesehold_income_target_retirement_value',
        'multi_ext_estimated_income_current_value',
        'multi_ext_estimated_income_retirement_value',
        'multi_ext_estimated_total_income_value',
        'multi_ext_estimated_total_income_retirement_value',
        'encoded_by',
        'date_encoded'
    ];

    public function collectionNewIPMultiExt($id){
        $addnewipcoll = AddingNewInvestmentProp::where('details_id',$id)->first();
        $multipleIP = MultipleNewIP::where('details_id',$id)->first();
        $newipgrowth = NewIPGrwowth::where('details_id',$id)->first();
        $multiext = NewIPMultipleExtension::where('details_id',$id)->first();
        
        
        $collection = [
            "AddNewIP" => $addnewipcoll,
            "MultipleIP" => $multipleIP,
            "NewIPGrowth" => $newipgrowth,
            "MultiExt" =>  $multiext
            ];
        return response()->json($collection);
    }
}
