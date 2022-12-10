<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_customer extends Model
{
    use HasFactory;
    protected $table="add_customer";
    protected $primaryKey="CustomerId";
    function getcustomer_users_id(){
        return $this->hasMany('App\Models\CustomerUsers','customer_users_id','customer_users_id');
    }
}
