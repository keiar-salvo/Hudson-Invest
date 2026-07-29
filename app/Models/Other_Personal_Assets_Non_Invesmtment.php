<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Other_Personal_Assets_Non_Invesmtment extends Model
{
  	protected $table = 'other__personal__assets__non__invesmtments';
    protected $fillable = [
        'details_id','other_personal_asset','non_investment_asset_client_percentage','non_investment_asset_partner_percentage','non_investment_asset_market_value','non_investment_asset_client','non_investment_asset_partner','encoded_by','date_encoded'
    ];
}
