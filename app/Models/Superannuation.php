<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Superannuation extends Model
{
   protected $table = 'superannuation';

    protected $fillable = [
        'details_id','gross_salary','sg_rate','annual_contribution','quarterly_contribution','partner_gross_salary','partner_sg_rate','partner_annual_contribution','partner_quarterly_contribution','grand_total_client','grand_total_partner','encoded_by','date_encoded'
    ];
}
