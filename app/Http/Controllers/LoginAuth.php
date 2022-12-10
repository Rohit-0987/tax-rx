<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CustomerUsers;
use App\Models\edit_profile;

class LoginAuth extends Controller
{
    public function signupCustomerCheck(Request $req){
        $name = $req->input('name');
        $username = $req->input('username');
        $email = $req->input('email');
        $password = $req->input('password');

        $check_username = CustomerUsers::where('username', $username)->count();
        if($check_username) {
            return redirect('signup-customer')->with('status', 'Username already exists!!');
        }
        $check_email = CustomerUsers::where('email', $email)->count();
        if($check_email) {
            return redirect('signup-customer')->with('status', 'Email already taken');
        }

        $customer_users = new CustomerUsers;
        $customer_users->name = $name;
        $customer_users->username = $username;
        $customer_users->email = $email;
        $customer_users->password = $password;
        $customer_users->save();

        $req->session()->put('usertype', 'customer');

        return redirect('dashboard');
    }

    public function signinAdminCheck(Request $req) {
        $username = $req->input('username');
        $password = $req->input('password');

        if($username == "admin" && $password == "admin") {
            $req->session()->put('usertype', 'admin');
            $req->session()->put('username', $username);
            return redirect('dashboard');
        }else {
            return redirect('signin-admin')->with('error', 'Invalid credentials!');
        }

    }

    public function loginCustomerCheck(Request $req) {
        $username = $req->input('username');
        $password = $req->input('password');
        
        if($username == "" || $password == "") {
            return redirect('/')->with('error', 'Please fill out all the fields');
        }

        $check = CustomerUsers::where([
            ['username', '=', $username],
            ['password', '=', $password]
        ])->count();

        if($check){
            $req->session()->put('username', $username);
            $req->session()->put('usertype', 'customer');
            return redirect('dashboard')->with('status','Login');
        }else{
            return redirect('/')->with('error', 'Invalid credentials!');
        }
    }

    public function signOut(Request $req) {
        $req->session()->flush('usertype');
        return redirect('/')->with('status', 'Logged Out Successfully');
    }

    public function editprofile()
    {
        return view('edit-profile');
    }

    public function editprofilesubmit(Request $req){
        
        $username = $req->session()->get('username');
        $user=CustomerUsers::where('username',$username)->get();
        $user_id =$user[0]->customer_users_id;
        $count=edit_profile::where('customer_users_id',$user_id)->count();
        if ($count!=0){
        edit_profile::where('customer_users_id',$user_id)->update([   
            "tradename"=>$req['trade_name'],
            "Gst_no" =>$req['gst'],
            "office_address"=>$req['Address'],
            "state" =>$req['state'],
            "pin_code"=>$req['pin_code'],
            "number"=>$req['mobile'],
            "pan_no"=>$req['pan'],
            "AUTHORISED"=>$req['authorised'],
            "bank_name"=>$req['bank_name'],
            "IFSC" =>$req['bank_ifsc'],
            "BankAccount"=>$req['bank_account'],
            
    ]);
}
    else{
        $edit_profile = new edit_profile;
        $edit_profile->tradename =$req['trade_name'];
        $edit_profile->Gst_no =$req['gst'];
        $edit_profile->office_address =$req['Address'];
        $edit_profile->state =$req['state'];
        $edit_profile->pin_code =$req['pin_code'];
        $edit_profile->number=$req['mobile'];
        $edit_profile->pan_no=$req['pan'];
        $edit_profile->AUTHORISED=$req['authorised'];
        $edit_profile->bank_name =$req['bank_name'];
        $edit_profile->IFSC =$req['bank_ifsc'];
        $edit_profile->BankAccount=$req['bank_account'];
        $username = $req->session()->get('username');

        $user=CustomerUsers::where('username',$username)->get()[0]->customer_users_id;
        
        $edit_profile->customer_users_id=$user_id;
        $edit_profile->save();
    }
        return redirect('/edit-profile');
    }
}
