<?php

namespace App\Http\Controllers\Auth_oath;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view("auth_oath.login");
    }

    public function post_login(){
        
    }
}
