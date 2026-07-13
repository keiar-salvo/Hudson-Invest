<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialIndependence extends Model
{
  protected $table = 'financial_independences';

       protected $fillable = [
        'target_age','years_to_target_age','desired_retirement_date','current_income_required_in_retirement','date_encoded'
    ];
}
