<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdComment extends Model
{
    //
    public function ads(){
        return $this->belongsTo('App\Ads');
    }
}
