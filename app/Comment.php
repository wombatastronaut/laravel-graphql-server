<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Get the user for the comment.
     */
    public function user ()
    {
        return $this->belongsTo('App\User');   
    }
}
