<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    //

    public function centers(){
        return $this->belongsToMany('App\Models\Center', 'langue_center','langue_id','center_id');
    }
}
