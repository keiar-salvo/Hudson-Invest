<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddingNewInvestmentProp extends Model
{
   protected $table = 'adding_new_investment_prop';
    protected $fillable = [
        'details_id','encoded_by','date_encoded'
    ];
}
