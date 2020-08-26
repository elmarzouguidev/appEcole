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

    public function single(Request $request, $slug){

        $ecole = Soutien::whereSlug($slug)->firstOrFail();

        views($ecole)->record();

        return view('front.soutien_v2.single.index',compact('ecole'));
    }

    public function storeReview(Request $request){

        // return response()->json([$request->all()]);
 
         $request->validate([
             'name'=>'required|string',
             'email'=>'required|email',
             'avis'=>'required|string',
             'score'=>'required|string',
             'appEcole'=>'required|integer'
         ]);
 
         $ecole = Soutien::find($request->appEcole);
 
         $ecole->reviews()->create([
 
             'name'=>$request->name,
             'email'=>$request->email,
             'content'=>$request->avis,
             'score'=>$request->score,
             'soutien_id'=>$request->appEcole
         ]);
 
         return response()->json([
             'success'=>"merci pour votre avis éclairé ... votre avis sera publié le plus vite possible",
         ]);
     }
}
