<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Spatial;

class Librairie extends Model implements Viewable
{

    use Spatial,InteractsWithViews;

    protected $spatial = ['positions'];

    public function ville(){
        return $this->belongsTo('App\Models\Ville');
    }

    public function area(){
        return $this->belongsTo('App\Models\Area');
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



    public function getUrl(){
        return  route('librairies.single',$this->slug);
    }
}
