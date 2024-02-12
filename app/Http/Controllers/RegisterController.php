<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            
        ]);
    }
    
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        $validateData['password'] = Hash::make(validateData['password']);
        User::create($validateData);
        $request -> Session() -> flash('Succes', 'Register Berhasil');

        if ($validateData['username'] == 'admin' && $validateData['password'] == 'admin') {
            return redirect('/home');
        } else {
            return back()->with('error', 'Username or password is wrong');   
        }
    }
}
