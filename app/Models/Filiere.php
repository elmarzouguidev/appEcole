<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    //

    public function ecoles(){
        return $this->belongsToMany('App\Models\Ecole', 'filiere_ecole','filiere_id','ecole_id');
    }

    public function soutiens(){
        return $this->belongsToMany('App\Models\Soutien', 'filiere_soutien','filiere_id','soutien_id');
    }
}
