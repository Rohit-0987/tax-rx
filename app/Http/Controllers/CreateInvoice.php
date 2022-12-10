<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerUsers;
use App\Models\add_customer;
use Illuminate\Support\Facades\DB;

class CreateInvoice extends Controller
{
    public function CreateInvoice()
    {
        return view('CreateInvoice');
    }
    public function CreateInvoiceSubmit(Request $req)
    {
        $username = $req->session()->get('username');
       $CustomerName = $req['CustomerName'];
        $customer = DB::table('customer_users')
->select('add_customer.CustomerId','add_customer.CustomerName','add_customer.CustomerAddress','customer_users.username','add_customer.GstNumber','add_customer.PanNumber','add_customer.Email','add_customer.MobileNumber','add_customer.BankName','add_customer.IFSC','add_customer.BankAccount',)
->join('add_customer','customer_users.customer_users_id','=','add_customer.customer_users_id')
->where('CustomerName', 'like', '%' . $CustomerName . '%' )->where('username','=',$username)->get();
        return view('CreateInvoice', ['customer' => $customer]);
    }

}
