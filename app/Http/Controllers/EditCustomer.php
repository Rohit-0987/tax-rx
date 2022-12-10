<?php

namespace App\Http\Controllers;
use App\Models\CustomerUsers;
use App\Models\add_customer;
use App\Models\edit_profile;

use Illuminate\Http\Request;

class EditCustomer extends Controller
{
    public function edit($CustomerId){
         $CustomerDetail=add_customer::where('CustomerId',$CustomerId)->get();
        return view('/EditCustomer',['CustomerDetail'=>$CustomerDetail]);
    }
    public function EditCustomer($CustomerId,Request $req){
        add_customer::where('CustomerId',$CustomerId)->update([   
            "CustomerName"=>$req['CustomerName'],
            "GstNumber" =>$req['GstNumber'],
            "CustomerAddress"=>$req['CustomerAddress'],
            "PanNumber" =>$req['PanNumber'],
            "Email"=>$req['Email'],
            "MobileNumber"=>$req['MobileNumber'],
            "BankName"=>$req['BankName'],
            "IFSC"=>$req['IFSC'],
            "BankAccount"=>$req['BankAccount']
            
    ]);
    return redirect()->back();
    }
}
