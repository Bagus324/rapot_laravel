<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index(){
        return view('login');
    }

    public function otentikasi(Request $request){
        var_dump($request);
        // if(Auth::attempt($credential)){
        //     dd('sukses');
        // }
    }
}
