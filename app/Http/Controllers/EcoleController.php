<?php

namespace App\Http\Controllers;

use App\Models\Ecole;
use App\Models\Niveau;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class EcoleController extends Controller
{

    public function index()
    {
        // $niveaux = Niveau::select('slug')->pluck('slug');
        // dd($niveaux);
        $ecoles = QueryBuilder::for(Ecole::class)

            ->allowedFilters([
                'ville_name','area',
                AllowedFilter::exact('niveaux', 'all_niveaux')
            ])

            ->get();

        return view('front.ecole.index',compact('ecoles'));
    }

    protected function searchNiveau($keyword, $arrayToSearch){
        foreach($arrayToSearch as $key => $arrayItem){
            if( stristr( $arrayItem, $keyword ) ){
                return $arrayItem;
            }

        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ecole  $ecole
     * @return \Illuminate\Http\Response
     */
    public function show(Ecole $ecole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ecole  $ecole
     * @return \Illuminate\Http\Response
     */
    public function edit(Ecole $ecole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ecole  $ecole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ecole $ecole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ecole  $ecole
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecole $ecole)
    {
        //
    }
}
