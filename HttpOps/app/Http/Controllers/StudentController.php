<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    //
    public function index(){
        $data =  Http::get("https://reqres.in/api/users?page=1");
        return view('student',['data'=>$data['data']]);
    }
}
