<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    /**
     * Get the user for the post.
     */
    public function user ()
    {
        return $this->belongsTo('App\User');   
    }

    /**
     * Get the comments for the post.
     */
    public function comments ()
    {
        return $this->hasMany('App\Comment');   
    }
}
