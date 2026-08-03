<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invesment_Related_Liabilities extends Model
{
    protected $table = 'invesment__related__liabilities';
    protected $fillable = [
        'details_id','margin_investment_loans','margin_investment_client_percentage','margin_investment_partner_percentage','margin_investment_market_value','margin_investment_client','margin_investment_partne'
        ,'business_loans_client_percentage','business_loans_partner_percentage','business_loans_market_value','business_loans_client','business_loans_partner'
        ,'total_related_liabilities_market_value','total_related_liabilities_client','total_related_liabilities_partner','encoded_by','date_encoded'
    ];
}
