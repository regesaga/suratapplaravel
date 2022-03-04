<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert; 


class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }


    public function destroy(Request $request){
       
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        Alert::success('Succes Title', 'Anda Berhasil Logout');

        return Redirect()->route('login');
    }
}
