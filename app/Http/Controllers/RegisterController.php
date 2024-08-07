<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Sanitization
        $request->request->add(['username' => Str::slug($request->username)]);

        // Validation
        $this->validate($request, [
            'name' => 'required|max:30|min:3',
            'email' => 'required|unique:users|email|max:60',
            'username' => 'required|min:3|max:20|unique:users',
            'password' => 'required|confirmed|min:6|max:30',
            'password_confirmation' => 'required|same:password',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login
        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);
        auth()->attempt($request->only('email', 'password'));

        // Redirect
        session()->flash('success', 'Your account has been created!');
        return redirect()->route('posts.index');
    }
}
