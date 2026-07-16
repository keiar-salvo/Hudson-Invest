<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestmentAsset extends Model
{
    protected $table = 'investment_asset';

       protected $fillable = [
        'details_id','investment_property','cilent_percentage','partner_percentage','market_value','clent','partner','encoded_by','date_encoded'
    ];
}
