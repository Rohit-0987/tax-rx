<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerUsers;
use App\Models\edit_profile;
class userprofile extends Controller
{
    
    public function profile(Request $req){
        $username = $req->session()->get('username');
        $user=CustomerUsers::where('username',$username)->get();
        $user_id =$user[0]->customer_users_id;

        $user_profile=edit_profile::where('customer_users_id',$user_id)->get();
        // echo "<pre>";
        // print_r($user_profile);
        return view('profile',["user"=>$user],["user_profile"=>$user_profile]);
    }
}
