<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal_Debt_Rates extends Model
{
    protected $table = 'personal__debt__rates';
    protected $fillable = [
        'details_id','personal_debt_rate_mortgage_rates','personal_debt_rate_years','personal_debt_rate_personal_loans','personal_debt_rate_personal_loans_years','personal_debt_rate_car_loans','personal_debt_rate_car_loans_years','encoded_by','date_encoded'
    ];
}
