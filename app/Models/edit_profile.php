<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edit_profile extends Model
{
    use HasFactory;
    protected $table = "edit_profile";
    protected $primaryKey = "edit_id";
    function getcustomer_users_id(){
        return $this->hasMany('App\Models\CustomerUsers','customer_users_id','customer_users_id');
    }
}
