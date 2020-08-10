<?php

namespace App\Http\Livewire;

use App\Models\Ecole;
use Livewire\Component;
use Spatie\QueryBuilder\QueryBuilder;

class Filter extends Component
{
    public function render()
    {
        $ecoles = QueryBuilder::for(Ecole::class)

            ->allowedFilters(['ville_name','area'])
            // ->allowedIncludes('ville')
            ->get();
        return view('livewire.filter',compact('ecoles'));
    }
}
