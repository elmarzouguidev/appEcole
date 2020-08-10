<?php

namespace App\Http\Livewire;

use App\Models\Ecole;
use Livewire\Component;

class Search extends Component
{

    public $search = '';

    public function render()
    {
        $ecoles = Ecole::where('name', 'like',$this->search)->get();
        return view('livewire.search',compact('ecoles'));
    }



}
