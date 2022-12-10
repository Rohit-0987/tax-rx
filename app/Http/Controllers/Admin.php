<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerUsers;
use App\Models\edit_profile;
class Admin extends Controller
{
    public function customerView(Request $req){
        //$data = CustomerUsers::all();
        //$edit=edit_profile::all();
        $data = DB::table('customer_users')
->select('customer_users.customer_users_id','customer_users.name','customer_users.username','customer_users.email','edit_profile.tradename','customer_users.password')
->join('edit_profile','edit_profile.customer_users_id','=','customer_users.customer_users_id')
->get();
        return view('admin-customer-page', ['data'=>$data]);
    }
}
