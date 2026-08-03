<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credit_Card extends Model
{
    protected $table = 'credit__cards';
    protected $fillable = [
        'details_id','credit_card','credit_card_client_percentage','credit_card_partner_percentage','credit_card_market_value','credit_card_client','credit_card_partner','encoded_by','date_encoded'
    ];
}
