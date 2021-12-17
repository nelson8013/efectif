<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeStaffController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('isMeStaff');
    }


    public function index(){
        return view('meStf.dashboard');
    }
}
