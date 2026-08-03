<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Liabilities_Non_Investment extends Model
{
   	protected $table = 'liabilities__non__investments';
    protected $fillable = [
        'details_id','mortgage_residence','mortgage_partner_percentage','mortgage_market_value','mortgage_client','mortgage_partner','personal_loans','personal_loans_client_percentage','personal_loans_partner_percentage',
        'personal_loans_market_value','personal_loans_client','personal_loans_partner','car_loans','car_loans_client_percentage','car_loans_partner_percentage','car_loans_market_value',
        'car_loans_client','car_loans_partner','total_non_invesment_liabilities_market_value','total_non_invesment_liabilities_client','total_non_invesment_liabilities_partner','encoded_by','date_encoded'
    ];
}
