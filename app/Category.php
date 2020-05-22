<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name']; //que me gustaria mostrar de la migracion o bbdd

    public function articles(){  //establece la relacion entre modelos, en este caso 1 a muchos
        return $this -> hasMany('App\Article');
    }

    public function scopeSearch($query, $name){
        return $query-> where('name','LIKE','%' . $name . '%');
    }

 //   public function scopeSearchCategory($query, $name){
 //       return $query-> where('name','=', $name);
 //   }
}
