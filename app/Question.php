<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    function category()
    {
        return $this->belongsTo('App\Category');
    }

    function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
