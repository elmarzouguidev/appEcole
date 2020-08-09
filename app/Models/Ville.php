<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    //

    public function areas()
    {
        return $this->hasMany('App\Models\Area');
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
