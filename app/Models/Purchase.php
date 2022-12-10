<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $table="purchase_bill";
    protected $primaryKey="PurchaseId";
    function getcustomer_users_id(){
        return $this->hasMany('App\Models\CustomerUsers','customer_users_id','customer_users_id');
    }
    function getCustomerId(){
        return $this->hasMany('App\Models\vendor','VendorId','VendorId');
    }
}
