<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use RealRashid\SweetAlert\Facades\Alert; 

class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        Alert::success('Succes Title', 'Anda Berhasil Logout');

        return redirect()->route('login');
    }
}
