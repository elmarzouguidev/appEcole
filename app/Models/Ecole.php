<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use TCG\Voyager\Traits\Spatial;
use TCG\Voyager\Traits\Resizable;
class Ecole extends Model implements Viewable
{

    use Spatial,Resizable,InteractsWithViews;

    protected $spatial = ['positions'];

    protected $hidden = ['pivot'];

   // protected $visible = ['area'];

    protected $casts = [
        //'all_niveaux' => 'json',
    ];
    protected $removeViewsOnDelete = true;


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

    public function facilities(){
        return $this->belongsToMany('App\Models\Facilitie', 'facilitie_ecole','ecole_id','facilitie_id');
           // ->where('active',true)->get();

    }

    public function reviews(){
        return $this->hasMany('App\Models\Review');
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

    public function getVille():string
    {
       return $this->ville()->first('slug')->getAttribute('slug');
    }

    public function getNiveaux(){
        return $this->niveaux()
            ->wherePivot('ecole_id','=',$this->id)
            ->select('slug')
            ->pluck('slug');
            //->get();
    }
    /*public function getAllNiveauxAttribute(){

        return  $this->attributes['all_niveaux'];
    }*/
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

   /* public function scopeEnabled()
    {
        return Facilitie::where('active',true)->first();
    }*/
   /* public function getRouteKeyName()
    {
        return 'slug';
    }*/

    public function getSlugAttribute($value){

       return  route('ecoles.single',$value);
      
    }
}
