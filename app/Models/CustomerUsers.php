<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerUsers extends Model
{
    use HasFactory;
    protected $table = "customer_users";
    protected $primaryKey = "customer_users_id";
    function getcustomers_users_id(){
        return $this->hasMany('App\Models\edit_profile','customer_users_id','customer_users_id');
    }
}
