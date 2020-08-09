<?php

namespace App\Providers;

use App\Models\Area;
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
        View::composer(['front.ecole.*'], function ($view) {
            $view->with('areas', Area::all())
                 ->with('villes',Ville::all());
        });
    }
}
