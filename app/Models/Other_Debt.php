<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Other_Debt extends Model
{
  protected $table = 'other__debts';
    protected $fillable = [
        'details_id','other_debt','other_debt_client_percentage','other_debt_partner_percentage','other_debt_market_value','other_debt_client','other_debt_parnter','encoded_by','date_encoded'
    ];
}
