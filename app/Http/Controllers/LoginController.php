<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        // 只有未登录用户能访问登录页面
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    //登录页面
    public function create()
    {
        return view('login.create');
    }

    //登录功能
    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:200',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt($credentials, $request->has('remember'))){
            // 判断是否激活
            if(Auth::user()->activated){
                session()->flash('success', '登录成功！');
                return redirect()->route('users.show', [Auth::user()]);
            } else {
                Auth::logout();
                session()->flash('warning', '您的账号未激活，请登录邮箱进行激活哦！');
                return redirect('/');
            }

        }else{
            session()->flash('danger', '抱歉，登录失败！');
            return redirect()->back()->withInput();
        }
    }

    // 退出
    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
}

