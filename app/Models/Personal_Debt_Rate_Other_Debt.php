<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal_Debt_Rate_Other_Debt extends Model
{
    protected $table = 'personal__debt__rate__other__debts';
    protected $fillable = [
        'details_id','personal_debt_rate_other_debts','personal_debt_rate_other_debt_years','encoded_by','date_encoded'
    ];
}
