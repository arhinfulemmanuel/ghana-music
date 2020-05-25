<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    //
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
