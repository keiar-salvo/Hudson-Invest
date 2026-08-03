<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payg_Estimation extends Model
{
    protected $table = 'payg__estimations';
    protected $fillable = [
        'details_id','payg_estimation_client','payg_estimation_partner','encoded_by','date_encoded'
    ];
}
