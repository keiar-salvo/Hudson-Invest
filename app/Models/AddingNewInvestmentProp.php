<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddingNewInvestmentProp extends Model
{
   protected $table = 'adding_new_investment_prop';
    protected $fillable = [
        'details_id',
        'long_term_saving_current_value',
        'long_term_saving_retirement_value',
        'superannuation_client_current_value',
        'superannuation_client_retirement_value',
        'superannuation_partner_current_value',
        'superannuation_partner_retirement_value',
        'shares_current_value',
        'shares_retirement_value',
        'business_current_value',
        'business_retirement_value',
        'investment__portfolio_current_value',
        'investment__portfolio_retirement_value',
        'existing_investment_current_value',
        'existing_investment_retirement_value',
        'less_existing_investment_mortgage_current_value',
        'less_existing_investment_mortgage_retirement_value',
        'equity_existing_property_current_value',
        'equity_existing_property_retirement_value',
        'new_investment_property_current_value',
        'new_investment_property_retirement_value',
        'less_investment_prop_mortgage_current_value',
        'less_investment_prop_mortgage_retirement_value',
        'equity_investment_current_value',
        'equity_investment_retirement_value',
        'total_investment_property_value',
        'total_less_investment_prop_mortgage_value',
        'total_less_investment_prop_mortgage_retirement_value',
        'equity_investment_prop_port_current_value',
        'equity_investment_prop_port_retirement_value',
        'total_investment_value',
        'total_investment_retirement_value',
        'investment_portfolio_target_current_value',
        'investment_portfolio_target_retirement_value',
        'total_shortfall_value',
        'total_shortfall_retirement_value',
        'houesehold_income_target_current_value',
        'houesehold_income_target_retirement_value',
        'estimated_income_current_value',
        'estimated_income_retirement_value',
        'estimated_total_income_value',
        'estimated_total_income_retirement_value',
        'encoded_by',
        'date_encoded'
    ];

     public function collectionAddNewIP($id)
    {
        $collection = AddingNewInvestmentProp::where('details_id',$id)->first();
        
        return response()->json($collection);

     
    }
}
