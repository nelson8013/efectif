<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmManagerController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('isFarmManager');
    }

    public function index(){
        return view('fm.dashboard');
    }
}
