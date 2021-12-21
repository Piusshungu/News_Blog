<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function userRegistration(){

        return view('register.create');
    }

    public function storeUser(){

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);

        User::create($attributes);

        return redirect('/');
    }
}
