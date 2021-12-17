<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if(Auth()->user()->role_id == 2)
        {
            return route('crs.dashboard');
        }
        elseif(Auth()->user()->role_id == 3)
        {
            return route('tl.dashboard');
        }
        elseif(Auth()->user()->role_id == 4)
        {
            return route('fm.dashboard');
        }
        elseif(Auth()->user()->role_id == 5)
        {
            return route('fa.dashboard');
        }
        elseif(Auth()->user()->role_id == 6)
        {
            return route('meExec.dashboard');
        }
        elseif(Auth()->user()->role_id == 7)
        {
            return route('meStf.dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials))
        {

            if( Auth::user()->role_id == 2)
            {
                return redirect()->route('crs-dashboard');

            }elseif(Auth::user()->role_id == 3)
            {
                return redirect()->route('tl-dashboard');

            }elseif(Auth::user()->role_id == 4)
            {
                return redirect()->route('fm-dashboard');

            }elseif(Auth::user()->role_id == 5)
            {
                return redirect()->route('fa-dashboard');

            }elseif(Auth::user()->role_id == 6)
            {
                return redirect()->route('meExec-dashboard');

            }elseif(Auth::user()->role_id == 7)
            {
                return redirect()->route('meStf-dashboard');
            }
        }else{
            return redirect()->route('login')->with('error', 'Either your Email Or Password is incorrect');
        }
    }
}
