<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facilitie extends Model
{
    //

    public function ecoles(){
        return $this->belongsToMany('App\Models\Ecole', 'facilitie_ecole','facilitie_id','ecole_id');
    }
}
