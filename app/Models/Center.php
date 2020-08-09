<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Center extends Model
{
    use Spatial;

    protected $spatial = ['positions'];

    public function ville(){
        return $this->belongsTo('App\Models\Ville');
    }

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function langues(){
        return $this->belongsToMany('App\Models\Langue', 'langue_center','center_id','langue_id');
    }
}
