<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Net_Assets extends Model
{
    protected $table = 'net__assets';
    protected $fillable = [
        'details_id','net_assets_market_value','net_assets_client','net_assets_partner','encoded_by','date_encoded'
    ];
}
