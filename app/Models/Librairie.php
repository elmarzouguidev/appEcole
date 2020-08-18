<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Spatial;

class Librairie extends Model
{

    use Spatial;

    protected $spatial = ['positions'];

    public function ville(){
        return $this->belongsTo('App\Models\Ville');
    }

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function getArea():string
    {
        return $this->area()->first('slug')->getAttribute('slug');
    }

    public function getVille():string
    {
        return $this->ville()->first('slug')->getAttribute('slug');
    }

    public function scopeHome($query)
    {
        return $query->where('inHome',true)->get();
    }

    protected static function boot()
    {
        parent::boot();

        // auto-sets values on creation
        static::creating(function ($query) {
            $query->area = $query->getArea();
            $query->ville_name = $query->getVille();
           // $query->all_niveaux = $query->getNiveaux();
        });
        // auto-sets values on update
        static::updating(function ($query) {
            $query->area = $query->getArea();
            $query->ville_name = $query->getVille();
           // $query->all_niveaux = $query->getNiveaux();
        });
    }


    public function getSlugAttribute($value){

        return  route('librairies.single',$value);
       
    }

    public function getImageAttribute($value){
        return Voyager::image($value);
    }
    public function getLogoAttribute($value){
        return Voyager::image($value);
    }
}
