<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Spatial;

class Librairie extends Model
{

    use Spatial;

    protected $spatial = ['positions'];
}
