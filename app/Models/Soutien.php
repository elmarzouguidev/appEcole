<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
class Soutien extends Model implements Viewable
{
    use Spatial,InteractsWithViews;

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

    public function facilities(){
        
        return $this->belongsToMany('App\Models\Facilitie', 'facilitie_soutien','soutien_id','facilitie_id');
        // ->where('active',true)->get();
    }

    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }

    public function getArea():string
    {
        return $this->area()->first('slug')->getAttribute('slug');
    }

    public function getVille():string
    {
        return $this->ville()->first('slug')->getAttribute('slug');
    }
    public function getNiveaux(){
        return $this->niveaux()
            ->wherePivot('soutien_id','=',$this->id)
            ->select('slug')
            ->pluck('slug');
        //->get();
    }
    protected static function boot()
    {
        parent::boot();
     
        // auto-sets values on creation
        static::creating(function ($query) {
            $query->area = $query->getArea();
            $query->ville_name = $query->getVille();
            $query->all_niveaux = $query->getNiveaux();
      
        });
        // auto-sets values on update 
        static::updating(function ($query) {
            $query->area = $query->getArea();
            $query->ville_name = $query->getVille();
            $query->all_niveaux = $query->getNiveaux();
           
        });
    }


    public function getUrl(){
        return  route('cours.single',$this->slug);
    }
}
