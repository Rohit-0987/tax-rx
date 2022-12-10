<?php

namespace App\Http\Controllers;
use App\Models\add_customer;
use App\Models\CustomerUsers;
use App\Models\edit_profile;
use App\Models\Invoice;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateCustomerInvoice extends Controller
{
    public function CreateCustomerInvoices($CustomerId,Request $req){
        $username = $req->session()->get('username');
        $user=CustomerUsers::where('username',$username)->get();
        $CustomerDetail=add_customer::where('CustomerId',$CustomerId)->get();
        $user_id =$user[0]->customer_users_id;
        $user_profile=edit_profile::where('customer_users_id',$user_id)->get();
        //echo $user_profile;
        return view('/CreateCustomerInvoice',['CustomerDetail'=>$CustomerDetail,'user_profile'=>$user_profile],['user'=>$user]);
    }
    public function CreateCustomerInvoicesSubmit(Request $req,$CustomerId){
        $username = $req->session()->get('username');
        $user_id=CustomerUsers::where('username',$username)->get()[0]->customer_users_id;
        $Invoice = new Invoice;
        $Invoice->InvoiceNumber=$req['InvoiceNumber'];
        $Invoice->InvoiceDate=$req['InvoiceDate'];
        $Invoice->DueDate=$req['DueDate'];
        $Invoice->ClientBusinessAddress=$req['ClientBussinessName'];
        $Invoice->ClientAddress=$req['ClientBussinessAddress'];
        $Invoice->ClientCity=$req['City'];
        $Invoice->ClientPostsl=$req['PostalCode'];
        $Invoice->ClientState=$req['State'];
        $Invoice->Country=$req['Country'];
        $Invoice->goodservices=$req['goodservices'];
        $Invoice->TaxableValue=$req['TaxableValue'];
        $Invoice->HSNSAC=$req['Hsn/Sac'];
        $Invoice->UQC=$req['UQC'];
        $Invoice->quantity=$req['Quantity'];
        $Invoice->GstRate=$req['GstRate'];
        $Invoice->IGST=$req['Igst'];
        $Invoice->CGST=$req['Cgst'];
        $Invoice->SGSTUTGST=$req['SGST/UTGST'];
        $Invoice->SupplyType=$req['SupplyType'];
        $Invoice->paid=$req['Paid'];
        $Invoice->Unpaid=$req['UnPaid'];
        $Invoice->customer_users_id =$user_id;
        $Invoice->CustomerId=$CustomerId;
        $Invoice->save();
        return redirect()->back();
    }

    public function ViewAdminInvoice()
    {
        return view('ViewAdminInvoice');
    }
    public function ViewAdminInvoiceSubmit(Request $req)
    {
        $CompanyName = $req['CompanyName'];
        // $Company=CustomerUsers::where('name','like', '%'.$CompanyName.'%')->get();
        $Company = DB::table('customer_users')
            ->select('customer_users.customer_users_id', 'customer_users.name', 'customer_users.username', 'customer_users.email', 'edit_profile.tradename', 'customer_users.password')
            ->join('edit_profile', 'edit_profile.customer_users_id', '=', 'customer_users.customer_users_id')->where('tradename', 'like', '%' . $CompanyName . '%')->get();

        return view('ViewAdminInvoice', ['Company' => $Company]);
    }

    public function ViewInvoice(Request $req,$customer_users_id){
        $usertype = $req->session()->get('usertype');
        if($usertype=="customer"){
        $username = $req->session()->get('username');
        $user_id=CustomerUsers::where('username',$username)->get()[0]->customer_users_id;
        $Invoice=invoice::where('customer_users_id',$user_id)->get();
        return view('ViewInvoice',['Invoice'=>$Invoice]);
        }
        else{
           // $user_id=CustomerUsers::where('username',$username)->get()[0]->customer_users_id;
            $Invoice=invoice::where('customer_users_id',$customer_users_id)->get();
            return view('ViewInvoice',['Invoice'=>$Invoice]);
        }
        
    }

    public function delete($InvoiceId){
        Invoice::find($InvoiceId)->delete();
        return redirect()->back();
        }
}
