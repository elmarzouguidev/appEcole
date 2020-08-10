<?php

namespace App\Providers;

use App\FormFields\StripePlansFormField;
use Illuminate\Support\ServiceProvider;
use Spatie\QueryBuilder\QueryBuilderRequest;
use TCG\Voyager\Facades\Voyager;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        Voyager::addFormField(StripePlansFormField::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
      //  QueryBuilderRequest::setArrayValueDelimiter(',');
    }
}
