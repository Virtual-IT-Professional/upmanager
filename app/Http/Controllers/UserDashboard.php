<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboard extends Controller
{
    public function home(){
        $userType = "generalCustomer";
        return view('userDash.home',['userType'=>$userType]);
    }
}
