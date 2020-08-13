<?php

namespace App\Providers;

use App\Models\Area;
use App\Models\Niveau;
use App\Models\Ville;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use TCG\Voyager\Models\Page;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['front.*','livewire.*'], function ($view) {
            $view->with('areas', Area::select('name','slug')->get())
                 ->with('villes',Ville::all())
                 ->with('niveaux',Niveau::select('name','slug')->get());

        });
    }
}
