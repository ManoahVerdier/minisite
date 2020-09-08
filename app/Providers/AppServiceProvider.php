<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

use App\Formation;
use App\Conseil;
use App\Homepage;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if (Schema::hasTable('homepages')) {
            $formations_header = Formation::distinct('nom')
                ->whereNotNull('categorie_id')
                ->where("nom", "!=", "default")
                ->orderBy('nom', 'ASC')
                ->get();
            $conseils_header = Conseil::distinct('certification')
                ->where('slug', '!=', 'audit-interne-qualite-externalise')
                ->orderBy('certification', 'ASC')
                ->get();
            $hp = Homepage::first();

            View::share('formations_header', $formations_header);
            View::share('conseils_header', $conseils_header);
            View::share('hp', $hp);
        }
    }
}
