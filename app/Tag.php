<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";

    protected $fillable = ['name'];

    public function articles(){
        return $this -> belongsToMany('App\Article')->withTimestamps();
    }

    public function scopeSearchTag($query, $name){
        return $query-> where('name','LIKE','%' . $name . '%');
    }
}
