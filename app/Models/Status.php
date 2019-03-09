<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    // 一对一关联，一条微博属于一位用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
