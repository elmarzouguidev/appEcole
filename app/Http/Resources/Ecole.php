<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use TCG\Voyager\Facades\Voyager;

class Ecole extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public static $wrap = 'ecoles';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug'=>route('ecoles.single',$this->slug),
            'addresse'=>$this->addresse,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'ville'=>$this->ville_name,
            'area'=>$this->area,
            /*************************************/
            'coordinates'=>$this->getCoordinates(),
            'lat'=>$this->getCoordinates()[0]['lat'],
            'lng'=>$this->getCoordinates()[0]['lng'],
            /*************************************/
            'logo'=>Voyager::image($this->logo),
            'image'=>Voyager::image($this->image),
            /*************************************/
            'reviews'=>$this->reviews()->count()
        ];
    }
}
