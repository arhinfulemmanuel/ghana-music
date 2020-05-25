<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

class Ads extends Model implements ViewableContract
{
    //
    use Viewable;
    protected $fillable = ['title', 'note', 'image', 'audio', 'deadline'];

    public function adComments(){
        return $this->hasMany('App\AdComment');
    }
}
