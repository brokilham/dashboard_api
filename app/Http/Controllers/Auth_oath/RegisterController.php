<?php

namespace App\Http\Controllers\Auth_oath;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(){
        return view("auth_oath.register");
    }

    public function register_process(Request $request){
        return response()->json(['result'=> $request->txt_name]);    
    }
}
