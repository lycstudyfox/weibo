<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'emial' => 'required|email|unique:users|max:200',
            'password' => 'required|confirmed|min:6',
        ]);
        return;
    }
}
