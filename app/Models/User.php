<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // 表命名约定
    // protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 过滤用户提交的字段
     */
    protected $fillable = [
        'name', 'email', 'password','avatar', 'activation_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     * 隐藏敏感字段
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // 一对多关联，一位用户拥有多条微博
    public function statuses()
    {
        return $this->hasMany(Status::class);
    }

    // 首页数据加载
    public function feed()
    {
        return $this->statuses()->orderBy('created_at', 'desc');
    }
}
