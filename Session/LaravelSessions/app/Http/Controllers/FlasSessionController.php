<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlasSessionController extends Controller
{
    // Flash Session Message Use

    public function userLogin(Request $req){
        $data = $req->input('username');
        $req->session()->flash('user',$data);
        return redirect('login'); 
    }
}
