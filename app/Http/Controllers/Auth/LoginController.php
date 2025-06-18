<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Redirect user after login based on role.
     */
    protected function authenticated($request, $user)
    {
        if ($user->role === 'admin') {
            return redirect('/admin');
        }

        return redirect('/home');
    }
}
