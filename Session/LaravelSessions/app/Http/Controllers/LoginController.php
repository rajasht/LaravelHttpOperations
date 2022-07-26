<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // To send data entered at login page as input to Profile page
    public function userLogin(Request $req){
        $data = $req->input();
        $req->session()->put('user',$data['username']);
        return redirect('profile');
    }
    
    public function registerUser(Request $reqReg){
        $data = $reqReg->input('username');
        $reqReg->session()->flash('user',$data);
        return redirect('register');
    }
}


