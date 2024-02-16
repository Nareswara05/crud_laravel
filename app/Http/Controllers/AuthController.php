<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('all')->with('success', 'Login berhasil');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau password salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home')->with('success', 'Anda berhasil logout');
    }


    public function showRegisterForm()
    {
        return view('register.index');
    }

    public function register(Request $request)
    {
        // Validation logic
        $validateData = $request->validate([
            "name" => "required|max:255",
            "email" => "required|email|unique:users,email,NULL,id",
            "password" => "required",
        ]);
        
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        $request->session()->flash('success', 'Register Berhasil');
        return redirect('/login/index')->with('success', 'Register Berhasil');
    }
}

