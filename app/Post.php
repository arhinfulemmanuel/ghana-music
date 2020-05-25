<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

class Post extends Model implements ViewableContract
{
    //
    use Viewable;
    protected $fillable = ['title', 'note', 'image', 'audio'];

    public function postComments(){
        return $this->hasMany('App\postComment');
    }
}
