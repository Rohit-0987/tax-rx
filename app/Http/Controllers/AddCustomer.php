<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerUsers;
use App\Models\add_customer;

class AddCustomer extends Controller
{
    public function AddCustomer(){
        return view('add-customer');
    }
    public function AddCustomerSubmit(Request $req){
        
        $AddCustomer = new add_customer;
        $AddCustomer->CustomerName=$req['CustomerName'];
        $AddCustomer->CustomerAddress=$req['CustomerAddress'];
        $AddCustomer->GstNumber=$req['GstNumber'];
        $AddCustomer->PanNumber=$req['PanNumber'];
        $AddCustomer->Email=$req['Email'];
        $AddCustomer->MobileNumber=$req['MobileNumber'];
        $AddCustomer->BankName=$req['BankName'];
        $AddCustomer->IFSC=$req['IFSC'];
        $AddCustomer->BankAccount=$req['BankAccount'];

        $username = $req->session()->get('username');
        $user_id=CustomerUsers::where('username',$username)->get()[0]->customer_users_id;

        $AddCustomer->customer_users_id=$user_id;
        $AddCustomer->save();

        return redirect()->back();
    }
}
