<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view(
            'login.index',
            [
                "title" => "login",
                "active" => "login"
            ]

        );
    }

    public function authenticate(Request $request)
    {
        $credential =  $request->validate([
            // 'email' => 'required|email:dns', // email harus valid dan sesuai domain yang ada di global website
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
