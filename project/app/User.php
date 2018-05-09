<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'dob'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comics()
    {
        return $this->morphedByMany('App\ComicPost', 'favouritable');
    }
    public function mangas()
    {
        return $this->morphedByMany('App\MangaPost', 'favouritable');
    }
    public function manhwas()
    {
        return $this->morphedByMany('App\ManhwaPost', 'favouritable');
    }
      public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
    
}
