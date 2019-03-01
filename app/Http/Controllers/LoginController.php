<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //登录页面
    public function create()
    {
        return view('login.create');
    }

    //登录功能
    public function store()
    {

    }
}
