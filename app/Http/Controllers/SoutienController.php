<?php

namespace App\Http\Controllers;

use App\Models\Soutien;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
class SoutienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cours = QueryBuilder::for(Soutien::class)

        ->allowedFilters([

            'area','type',
            AllowedFilter::exact('niveaux', 'all_niveaux'),
            AllowedFilter::exact('LaVille', 'ville_name'),
            AllowedFilter::exact('hasTransport', 'transport'),
            AllowedFilter::exact('Arrondissement', 'area')

        ])
        // ->paginate(2)
        // ->appends(request()->query());
        ->get();

        return view('front.soutien_v2.index',compact('cours'));
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
     * @param  \App\Models\Soutien  $soutien
     * @return \Illuminate\Http\Response
     */
    public function show(Soutien $soutien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soutien  $soutien
     * @return \Illuminate\Http\Response
     */
    public function edit(Soutien $soutien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Soutien  $soutien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soutien $soutien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soutien  $soutien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soutien $soutien)
    {
        //
    }
}
