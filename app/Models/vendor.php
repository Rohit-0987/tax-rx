<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    use HasFactory;
    protected $table="vendor";
    protected $primarykay= "VendorId";

    function getcustomer_users_id(){
        return $this->hasMany('App\Models\CustomerUsers','customer_users_id','customer_users_id');
    }
}
