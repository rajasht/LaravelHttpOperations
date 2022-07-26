<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(Request $req){
        $file_name =  $req->file('docs')->getClientOriginalName();
        return $req->file('docs')->storeAs('documentuploaded',$file_name);
    }
}
