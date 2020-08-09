<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    //

    public function ecoles(){
        return $this->belongsToMany('App\Models\Ecole', 'niveau_ecole','niveau_id','ecole_id');
    }

    public function soutiens(){
        return $this->belongsToMany('App\Models\Soutien', 'niveau_soutien','niveau_id','soutien_id');
    }
}
