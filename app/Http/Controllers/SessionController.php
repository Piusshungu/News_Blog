<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function userLogin(){

        return view('Login.create');
    }

    public function createSession(){

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)){

            session()->regenerate();

            return redirect('/')->with('success', 'Welcome back');
        }

        return back()->withInput()

        ->withErrors(['email' => 'Credentials do not match our records, please try again']);
    }


    public function destroySession(){

        auth()->logout();

        return redirect('/')->with('success', 'Logged out successfully');
    }
}
