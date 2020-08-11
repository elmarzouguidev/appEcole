<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facilitie extends Model
{
    //

    public function ecoles(){
        return $this->belongsToMany('App\Models\Ecole', 'facilitie_ecole','facilitie_id','ecole_id');
    }

    public function centers(){
        return $this->belongsToMany('App\Models\Center', 'facilitie_center','facilitie_id','center_id');
    }

    public function soutiens(){
        return $this->belongsToMany('App\Models\Soutien', 'facilitie_soutien','facilitie_id','soutien_id');
    }


}
