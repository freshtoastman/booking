<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    public function bookitem(){
        return $this->hasMany('App\BookItem',"id","item_id");
    
    }
    public function publish(){
        return $this->belongsTo('App\Publish',"publish_id","id");
    
    }

}
