<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validation
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('posts.index', auth()->user()->username);
        }

        // return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        return back()->with(['mensaje_login' => 'Credenciales incorrectas']);
    }
}
