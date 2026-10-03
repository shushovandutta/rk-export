<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginAttempt(Request $request)
    {
        $request->validate([
            'email'    => 'required|string',
            'password' => 'required|string',
        ]);

        $loginInput = $request->input('email');
        $loginField = filter_var($loginInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';


        $credentials = [
            $loginField => $loginInput,
            'password'  => $request->input('password'),
        ];

        $remember = $request->filled('remember');


        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();


            return redirect()->intended('/dashboard')->with('success', 'Welcome back!');
        }


        return back()->withErrors([
            'email' => 'Invalid email/username or password.',
        ])->onlyInput('email');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully.');
    }
}