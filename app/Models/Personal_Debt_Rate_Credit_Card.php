<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal_Debt_Rate_Credit_Card extends Model
{
    protected $table = 'personal__debt__rate__credit__cards';
    protected $fillable = [
        'details_id','personal_debt_rate_credit_card','personal_debt_rate_credit_card_years','encoded_by','date_encoded'
    ];
}
