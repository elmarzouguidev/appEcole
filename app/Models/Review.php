<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //

    /*  protected $casts = [
          'created_at' => 'datetime:Y-m-d',
      ];*/

    protected $fillable = [
        'name',
        'email',
        'content',
        'score',
        'appEcole'
    ];

    public function ecole()
    {
        return $this->belongsTo('App\Models\Ecole');
    }

    public function center(){

        return $this->belongsTo('App\Models\Center');  
    }

    public function Soutien(){

        return $this->belongsTo('App\Models\Soutien'); 
    }

    public function librairie(){
        
        return $this->belongsTo('App\Models\Librairie'); 
    }

    public function getCreatedAtAttribute($value) {

        $date =\Carbon\Carbon::parse($value)->format('j-F-Y');

        return str_replace('-',' ',$date);
    }
}
