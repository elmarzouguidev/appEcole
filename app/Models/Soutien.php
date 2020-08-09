<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Soutien extends Model
{
    use Spatial;

    protected $spatial = ['positions'];


    public function ville(){
        return $this->belongsTo('App\Models\Ville');
    }

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }


    public function niveaux(){
        return $this->belongsToMany('App\Models\Niveau', 'niveau_soutien','soutien_id','niveau_id');
    }

    public function filieres(){
        return $this->belongsToMany('App\Models\Filiere', 'filiere_soutien','soutien_id','filiere_id');
    }
}
