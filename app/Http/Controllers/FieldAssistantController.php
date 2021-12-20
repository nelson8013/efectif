<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FieldAssistant;

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

    public function field_assistant_profile($id){
        $field_assistant = FieldAssistant::find($id);
        return view('fa.field_assistant_profile', ['field_assistant' => $field_assistant]);
    }

}
