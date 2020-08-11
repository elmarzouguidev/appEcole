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

    public function singleEcole(Request $request, $slug){

        $ecole = Ecole::whereSlug($slug)->firstOrFail();

        return view('front.ecole.single.index',compact('ecole'));
    }

    public function ecoleAction(Request $request){

        if($request->has('emailEcole') && $request->emailEcole ==='emailOk')
        {
            return redirect()->route('home');
        }

        if($request->has('reviewEcole') && $request->reviewEcole ==='reviewOk')
        {
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
            return redirect()->back();
        }

    }

    protected function searchNiveau($keyword, $arrayToSearch){
        foreach($arrayToSearch as $key => $arrayItem){
            if( stristr( $arrayItem, $keyword ) ){
                return $arrayItem;
            }

        }

    }

}
