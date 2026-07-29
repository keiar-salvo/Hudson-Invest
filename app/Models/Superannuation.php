<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Superannuation extends Model
{
   protected $table = 'superannuation';

    protected $fillable = [
        'details_id','gross_salary','sg_rate','annual_contribution','quarterly_contribution','','encoded_by','date_encoded'
    ];
}
