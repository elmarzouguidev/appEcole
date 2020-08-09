<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Ecole as EcoleResource;
use App\Models\Ecole;
class EcoleController extends Controller
{
    //

    public function index()
    {
        return  EcoleResource::collection(Ecole::all());
    }
}
