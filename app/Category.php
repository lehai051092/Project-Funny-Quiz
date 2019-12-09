<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function questions(){
        return $this->hasMany('App\Question');
    }
}
