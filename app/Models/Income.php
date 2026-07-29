<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $table = 'income';
     protected $fillable = [
        'salary_frequency',
        'salary_client',
        'salary_partner',
        'salary_client_annual',
        'salary_partner_annual',
        'bonus_frequency',
        'bonus_client',
        'bonus_partner',
        'bonus_client_annual',
        'bonus_partner_annual',
        'interest_income_frequency',
        'interest_income_client',
        'interest_income_partner',
        'interest_income_client_annual',
        'interest_income_partner_annual',
        'rental_income_frequency',
        'rental_income_client',
        'rental_income_partner',
        'rental_income_client_annual',
        'rental_income_partner_annual',
        'dividend_income_frequency',
        'dividend_income_client',
        'dividend_income_partner',
        'dividend_income_client_annual',
        'dividend_income_partner_annual',
        'ss_income_frequency',
        'ss_income_client',
        'ss_income_partner',
        'ss_income_client_annual',
        'ss_income_partner_annual',
        'business_income_frequency',
        'business_income_client',
        'business_income_partner',
        'business_income_client_annual',
        'business_income_partner_annual',
        'other_income_frequency',
        'other_income_client',
        'other_income_partner',
        'other_income_client_annual',
        'other_income_partner_annual',
        'total_income_client_annual',
        'total_income_partner_annual',
        'encoded_by',
        'date_encoded'
    ];
}
