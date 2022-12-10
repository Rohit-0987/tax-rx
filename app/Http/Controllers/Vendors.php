<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendor;
use App\Models\CustomerUsers;
use Illuminate\Support\Facades\DB;

class Vendors extends Controller
{
    public function AddVendors()
    {
        return view('AddVendor');
    }

    public function AddVendorSubmit(Request $req)
    {

        $vendor = new vendor;
        $vendor->VendorName = $req['VendorName'];
        $vendor->VendorAddress = $req['VendorAddress'];
        $vendor->GstNumber = $req['GstNumber'];
        $vendor->PanNumber = $req['PanNumber'];
        $vendor->Email = $req['Email'];
        $vendor->MobileNumber = $req['MobileNumber'];
        $vendor->BankName = $req['BankName'];
        $vendor->IFSC = $req['IFSC'];
        $vendor->BankAccount = $req['BankAccount'];

        $username = $req->session()->get('username');
        $user_id = CustomerUsers::where('username', $username)->get()[0]->customer_users_id;

        $vendor->customer_users_id = $user_id;
        $vendor->save();

        return redirect()->back();
    }
    public function ViewVendor(Request $req)
    {
        $username = $req->session()->get('username');
        $user_id = CustomerUsers::where('username', $username)->get()[0]->customer_users_id;
        $vendor = Vendor::where('customer_users_id', $user_id)->get();
        return view('/ViewVendor', ["vendor" => $vendor]);
    }
    public function delete($VendorId)
    {

        vendor::where('VendorId', $VendorId)->delete();
        return redirect()->back();
    }

    public function edit($VendorId)
    {
        $VendorDetail = vendor::where('VendorId', $VendorId)->get();
        return view('/EditVendor', ['VendorDetail' => $VendorDetail]);
    }
    public function EditVendor($VendorId, Request $req)
    {
        vendor::where('VendorId', $VendorId)->update([
            "VendorName" => $req['VendorName'],
            "GstNumber" => $req['GstNumber'],
            "VendorAddress" => $req['VendorAddress'],
            "PanNumber" => $req['PanNumber'],
            "Email" => $req['Email'],
            "MobileNumber" => $req['MobileNumber'],
            "BankName" => $req['BankName'],
            "IFSC" => $req['IFSC'],
            "BankAccount" => $req['BankAccount']

        ]);
        return redirect()->back();
    }


    public function AdminViewVendor($CustomerId){
        $vendor=vendor::where('customer_users_id',$CustomerId)->get();
        return view('/ViewVendor',["vendor"=>$vendor]);
    }
}
