<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TotalLiabilities extends Model
{
    protected $table = 'total_liabilities';
    protected $fillable = [
        'details_id','total_liabilities_market_value','total_liabilities_client','total_liabilities_partner','encoded_by','date_encoded'
    ];
}
