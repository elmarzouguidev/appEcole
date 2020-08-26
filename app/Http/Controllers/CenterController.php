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
                AllowedFilter::exact('langue', 'all_langues'),
                AllowedFilter::exact('niveaux', 'all_niveaux'),
                AllowedFilter::exact('LaVille', 'ville_name'),
                AllowedFilter::exact('Arrondissement', 'area')

            ])
            // ->paginate(2)
            // ->appends(request()->query());
            ->get();

        return view('front.center_v2.index',compact('centers'));
    }

    public function singleCenter(Request $request, $slug){

        $center = Center::whereSlug($slug)->firstOrFail();

        views($center)->record();

        return view('front.center.single.index',compact('center'));
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
 
         $ecole = Center::find($request->appEcole);
 
         $ecole->reviews()->create([
 
             'name'=>$request->name,
             'email'=>$request->email,
             'content'=>$request->avis,
             'score'=>$request->score,
             'center_id'=>$request->appEcole
         ]);
 
         return response()->json([
             'success'=>"merci pour votre avis éclairé ... votre avis sera publié le plus vite possible",
         ]);
     }

}
