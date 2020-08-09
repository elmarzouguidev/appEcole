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
}
