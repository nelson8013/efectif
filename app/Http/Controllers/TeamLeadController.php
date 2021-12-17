<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamLeadController extends Controller
{
    //
    public function index(){
        return view('tl.dashboard');
    }
}
