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
         'area_id',
    ];

   // protected $visible = ['area'];


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

    /**
     * @param $query
     * @return mixed
     */
    public function scopeTop($query)
    {
        return $query->where('isTop',true)->get();
    }

    public function getArea():string
    {
       return $this->area()->first('slug')->getAttribute('slug');
    }

    public function getVille()
    {
       return $this->ville()->first('slug')->getAttribute('slug');
    }

    protected static function boot()
    {
        parent::boot();

        // auto-sets values on creation
        static::creating(function ($query) {
            $query->area = $query->getArea();
            $query->ville_name = $query->getVille();
        });
        // auto-sets values on update
        static::updating(function ($query) {
            $query->area = $query->getArea();
            $query->ville_name = $query->getVille();
        });
    }

}
