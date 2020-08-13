<?php

namespace App\Http\Controllers;

use App\Models\Center;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CenterController extends Controller
{

    public function index()
    {
        // $niveaux = Niveau::select('slug')->pluck('slug');
        // dd($niveaux);
        $centers = QueryBuilder::for(Center::class)

            ->allowedFilters([
                'area','type',
                AllowedFilter::exact('niveaux', 'all_niveaux'),
                AllowedFilter::exact('LaVille', 'ville_name'),
                AllowedFilter::exact('Arrondissement', 'area')
            ])
            // ->paginate(2)
            // ->appends(request()->query());
            ->get();

        return view('front.center.index',compact('centers'));
    }

}
