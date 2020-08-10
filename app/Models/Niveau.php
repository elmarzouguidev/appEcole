<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    //
    protected $hidden = ['pivot'];

    public function ecoles(){
        return $this->belongsToMany('App\Models\Ecole', 'niveau_ecole','niveau_id','ecole_id');
    }

    public function soutiens(){
        return $this->belongsToMany('App\Models\Soutien', 'niveau_soutien','niveau_id','soutien_id');
    }

    public function centers(){
        return $this->belongsToMany('App\Models\Center', 'center_niveau','niveau_id','center_id');
    }
}
