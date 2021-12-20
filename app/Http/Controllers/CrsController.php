<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CrsStoreRequest;
use App\Models\Roles;
use App\Models\Genders;
use App\Models\User;
use App\Models\Zones;
use App\Models\States;
use App\Models\FieldAssistant;
use App\Models\Lgas;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrsController extends Controller
{

    public function __construct()
    {
        $this->middleware('isCrs');
    }

    public function index(){

        return view('crs.dashboard');
    }

    public function field_assistants(){
        $field_assistants = FieldAssistant::all();
        return view('crs.fa',['field_assistants' => $field_assistants]);
    }


    public function add_team(){
        $roles   = Roles::all();
        $genders = Genders::all();
        $zones  = Zones::all();
        $states = States::all();
        $lgas   = Lgas::all();
        $users = User::all();


        return view('crs.add_team', [
            'roles' => $roles,
            'genders' => $genders,
            'zones' => $zones,
            'states' => $states,
            'lgas' => $lgas,
            'users' => $users
        ]);
    }

    public function store_team(Request $request){
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'phone'         => 'required',
            'employee_code' => 'required',
            'role_id'       => 'required'
        ]);


            $user = new User();
            $user->first_name    = $request->input('first_name');
            $user->last_name     = $request->input('last_name');
            $user->email         = $request->input('email');
            $user->password      = $request->input('password');
            $user->phone         = $request->input('phone');
            $user->employee_code = $request->input('employee_code');
            $user->role_id       = $request->input('role_id');
            $user->gender_id     = $request->input('gender_id');
            $user->save();

            if($request->input('role_id') == 5){
                $field_assistant = [
                    'user_id'    => $user->id,
                    'zone_id'    => $request->input('zone_id'),
                    'address'   => $request->input('address'),
                    'state_id'   => $request->input('state_id'),
                    'lga_id'     => $request->input('lga_id'),
                    'reports_to' => $request->input('reports_to'),
                    'is_active'  => $request->input('is_active'),
                    'created_at' => now(),
                ];
                DB::table('field_assistant')->insert($field_assistant);
                return redirect('/fa    ')->with('success','Field Assistant Added Successfully.');
            }

    }


}
