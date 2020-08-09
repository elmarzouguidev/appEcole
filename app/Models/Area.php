<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //

    public function ville(){

        return $this->belongsTo('App\Models\Ville');

    }

    public function ecoles()
    {
        return $this->hasMany('App\Models\Ecole');
    }
    public function soutiens()
    {
        return $this->hasMany('App\Models\Soutien');
    }

    public function centers()
    {
        return $this->hasMany('App\Models\Center');
    }
    public function libraries()
    {
        return $this->hasMany('App\Models\Librairie');
    }
}
