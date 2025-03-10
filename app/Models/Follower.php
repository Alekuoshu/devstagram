<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'follower_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function follower()
    {
        return $this->belongsTo(User::class);
    }

    public function follow()
    {
        return $this->user()->toggleFollow($this->follower_id);
    }

    public function unfollow()
    {
        return $this->user()->toggleFollow($this->follower_id);
    }
}
