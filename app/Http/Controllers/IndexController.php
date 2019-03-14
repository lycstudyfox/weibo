<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Auth;

class IndexController extends Controller
{
    // 首页
    public function index()
    {
        $status_items = [];
        if(Auth::check()){
            $status_items = Auth::user()->feed()->paginate(10);
        }else{
            $status_items = Status::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('index/index', compact('status_items'));
    }

    public function help()
    {
        return view('index/help');
    }
}
