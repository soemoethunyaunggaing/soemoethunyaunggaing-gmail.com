<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
        protected $redirectTo = '/users';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
    public function authenticate(Request $request)
    {
        // $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $email, 'password' => $password, 'is_admin' => 1])) {
            // Authentication passed...
            return redirect()->intended('/users');
        }
      
    }
    // public function redirectTo()
    // {   

    //     if(Auth::user()->is_admin == 1)
    //     {

    //         return '/admin/dashboard';

    //     }
    //     else if (Auth::user()->is_admin == 0) 
    //     {
    //             return 'user/questions/create';
    //     } 
    //     else{
    //             return '/login';
    //     }
        
        
    // }
}
