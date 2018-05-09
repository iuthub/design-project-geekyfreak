<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	 protected $table= 'commentables';
	 public $timestamps=false;
	 
     /**
     * Get all of the owning commentable models.
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}
