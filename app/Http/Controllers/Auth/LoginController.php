<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    //protected $redirectTo = '/admin/dashboard';

    protected function redirectTo()
    {
        $user = auth()->user();

        if ($user->hasRole('Super Admin')) {
            return '/admin/dashboard';
        } elseif ($user->hasRole('Teacher')) {
            return '/admin/teacher/dashboard';
        } else {
            return '/admin/dashboard';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web')->except('logout');
    }


    public function logout(){

        Auth::guard('web')->logout();

        return redirect()->route('login')->with('success', __('auth_logged_out'));
    }
}
