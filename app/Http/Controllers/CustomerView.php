<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerUsers;
use App\Models\add_customer;
use App\Models\edit_profile;
class CustomerView extends Controller
{
    public function CustomerViewData(Request $req){
        $username = $req->session()->get('username');
        $user_id=CustomerUsers::where('username',$username)->get()[0]->customer_users_id;
        $customer=add_customer::where('customer_users_id',$user_id)->get();
        return view('/CustomerView',["customer"=>$customer]);
    }
    public function delete($CustomerId){
        add_customer::find($CustomerId)->delete();
        return redirect()->back();
    }

    public function AdminCustomerViewData($CustomerId){
        $customer=add_customer::where('customer_users_id',$CustomerId)->get();
        return view('/CustomerView',["customer"=>$customer]);
    }

}
