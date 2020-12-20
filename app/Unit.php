<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;
use App\UnitUser;
class Unit extends Model
{
    public function findgroup(){
return $this->belongsTo('App\Group','gid','id');
    }
    public function unitsuser(){
        return $this->belongsTo('App\UnitUser','id','unit_id');
    }
    public function classfication(){
        return $this->belongsTo('App\Classification','cid','id');
    }

}
