<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Non_Investment_Assets extends Model
{
     protected $table = 'non__investment__assets';

    protected $fillable = [
        'details_id','principle_residence','principle_client_percentage','principle_partner_percentage','principle_market_value','principle_client','principle_partner','cash_everyday','cash_client_percentage','cash_partner_percentage','cash_market_value','cash_client','cash_partner','total_non_investment_market_value'
        ,'total_non_investment_partner','total_non_investment_client','encoded_by','date_encoded'
    ];
}
