<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
public function units(){
    return $this->hasMany('App\Unit',"gid","id");

}
public function grouptype(){
    return $this->belongsTo('App\Grouptype',"gtype_id","id");

}
public function country(){
    return $this->belongsTo('App\Country',"cid","id");

}
}
