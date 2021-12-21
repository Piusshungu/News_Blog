<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroySession(){

        auth()->logout();

        return redirect('/')->with('success', 'Logged out successfully');
    }
}
