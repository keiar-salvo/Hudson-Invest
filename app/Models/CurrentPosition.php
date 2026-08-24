<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrentPosition extends Model
{
    protected $table = 'current_positions';

    protected $fillable = [
        'gross_anual_income_client','gross_anual_income_partner','total_houese_hold_income','your_home_value_of_your_home',
        'your_home_mortgage','equity_in_your_home','investment_portfolio_long_term_savings','investment_portfolio_superannuation_client_net_value',
        'investment_portfolio_superannuation_partner_net_value','investment_portfolio_shares_net_value','investment_portfolio_business_net_value',
        'investment_portfolio_existing_investment_property','investment_portfolio_mortgage','investment_portfolio_total','investment_portfolio_net_position',
        'investment_portfolio_repay_mortgage','investment_portfolio_current_net_financial_assets','projected_value_of_your_home','investment_portfolio_assets_superannuation',
        'investment_portfolio_assets_long_term_savings','investment_portfolio_assets_shares','investment_portfolio_assets_business_net_value','investment_portfolio_assets_existing_investment_property',
        'investment_portfolio_assets_mortgage','investment_portfolio_net_financial_assets','date_encoded'
    ];

    public function currentPositionData($id)
    {
        $collection = CurrentPosition::where('details_id',$id)->first();
        
        return response()->json($collection);

     
    }
}
