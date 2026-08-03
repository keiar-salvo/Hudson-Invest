<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mortgage_Investment_Property extends Model
{
    protected $table = 'mortgage__investment__properties';
    protected $fillable = [
        'details_id','mortgage_investment','mortgage_investment_client_percentage','mortgage_investment_partner_percentage','mortgage_investment_market_value','mortgage_investment_client','mortgage_investment_partner','encoded_by','date_encoded'
    ];

}
