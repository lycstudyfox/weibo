<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class FollowersController extends Controller
{
    public function __construct()
    {
        // 当前控制器中所有方法均需登录用户才能操作
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        // 自己不能关注自己，需先做授权判断
        $this->authorize('follow', $user);

        // 判断是否已关注过此用户
        if( ! Auth::user()->isFollowing($user->id)) {
            // 没有关注过，则进行关注
            Auth::user()->follow($user->id);
        }

        return redirect()->route('users.show', $user->id);
    }

    public function destroy(User $user)
    {
        // 自己不能取消关注自己，需先做授权判断
        $this->authorize('follow', $user);

        // 判断是否已关注过此用户
        if(Auth::user()->isFollowing($user->id)) {
            // 关注过，则取消关注
            Auth::user()->unfollow($user->id);
        }

        return redirect()->route('users.show', $user->id);
    }
}
