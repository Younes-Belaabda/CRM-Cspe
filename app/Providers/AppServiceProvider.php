<?php

namespace App\Providers;

use App\Models\Contrat;
use App\Observers\ContratObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Contrat::observe(ContratObserver::class);
        Paginator::useBootstrapFour();
    }
}
