<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investment_Debt_Rates extends Model
{
    protected $table = 'investment__debt__rates';
    protected $fillable = [
        'details_id','investment_debt_rates','investment_debt_rates_business_loans','mortgage_existing_investment_properties','mortgage_new_investment_properties','encoded_by','date_encoded'
    ];
}
