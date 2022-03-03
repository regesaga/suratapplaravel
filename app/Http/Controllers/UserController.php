<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
