<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function image(){
        return $this->hasMany('App\Image');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }

    protected $guarded = ['_token'];
}
