<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;
use TCG\Voyager\Traits\Resizable;
class Ecole extends Model
{

    use Spatial,Resizable;

    protected $spatial = ['positions'];

    protected $hidden = [
        'ville_id', 'area_id',
    ];

    public function ville(){
        return $this->belongsTo('App\Models\Ville');
    }

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function niveaux(){
        return $this->belongsToMany('App\Models\Niveau', 'niveau_ecole','ecole_id','niveau_id');
    }

    public function filieres(){
        return $this->belongsToMany('App\Models\Filiere', 'filiere_ecole','ecole_id','filiere_id');
    }


    public function scopeTop($query)
    {
        return $query->where('isTop',true)->get();
    }
}
