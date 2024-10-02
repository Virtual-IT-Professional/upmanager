<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPanel extends Controller
{
    public function index(){
        return view('frontPart.home');
    }
}
