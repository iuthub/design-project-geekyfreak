<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManhwaPost extends Model
{
    protected $table= 'manhwa_posts';


    public function favourites()
    {
    	return $this->morphedToMany('App\User', 'favouritable');
    }
     public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
