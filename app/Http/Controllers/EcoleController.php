<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Http\Requests\SingleEcoleRequest;
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
                'area','type',
                AllowedFilter::exact('niveaux', 'all_niveaux'),
                AllowedFilter::exact('LaVille', 'ville_name'),
                AllowedFilter::exact('Arrondissement', 'area')
            ])
            // ->paginate(2)
            // ->appends(request()->query());
            ->get();

        return view('front.ecole.index',compact('ecoles'));
    }

    /**
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * For views method : https://github.com/cyrildewit/eloquent-viewable
     */
    public function singleEcole(Request $request, $slug){

        $ecole = Ecole::whereSlug($slug)->firstOrFail();

        views($ecole)->record();

        return view('front.ecole.single.index',compact('ecole'));
    }

    public function tryVue(Request $request){

        return response()->json([$request->all()]);

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

        $ecole = Ecole::find($request->appEcole);

        $ecole->reviews()->create([

            'name'=>$request->name,
            'email'=>$request->email,
            'content'=>$request->avis,
            'score'=>$request->score,
            'ecole_id'=>$request->appEcole
        ]);

        return response()->json([
            'success'=>"merci pour votre avis éclairé ... votre avis sera publié le plus vite possible",
        ]);
    }

    protected function searchNiveau($keyword, $arrayToSearch){
        foreach($arrayToSearch as $key => $arrayItem){
            if( stristr( $arrayItem, $keyword ) ){
                return $arrayItem;
            }

        }

    }

}
