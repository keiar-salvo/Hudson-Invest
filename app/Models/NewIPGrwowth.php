<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewIPGrwowth extends Model
{
    protected $table = 'new_ip_growth';
    protected $fillable = [
        'details_id','new_ip1','new_ip2','new_ip3','new_ip4','new_ip5','new_ip6','new_ip7','encoded_by','date_encoded'
    ];
    
}
