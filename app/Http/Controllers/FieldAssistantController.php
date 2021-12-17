<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldAssistantController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isFieldAssistant');
    }

    public function index(){
        return view('fa.dashboard');
    }
}
