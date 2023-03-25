<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
 
    protected $redirectTo;
    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 'admin':
            $this->redirectTo = RouteServiceProvider::ADMIN_HOME;
            return $this->redirectTo;
                break;
            case 'doctor':
               $this->redirectTo = RouteServiceProvider::DOCTOR_HOME;
                return $this->redirectTo;
                break;
            case 'patient':
                $this->redirectTo = RouteServiceProvider::PATIENT_HOME;
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
         
        // return $next($request);
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
}
