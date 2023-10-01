<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $fillable = ['user_id', 'tweet_id', 'tweet_body', 'image_url', 'video_url'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

Tweet::all();