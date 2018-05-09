<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ComicPost extends Model
{
    //
    protected $table= 'comic_posts';


    public function favourites()
    {
    	return $this->morphToMany('App\User', 'favouritable');
    }
     public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
