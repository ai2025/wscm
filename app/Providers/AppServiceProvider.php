<?php

namespace App\Providers;

use App\Models\KodeAkses;
use Illuminate\Support\ServiceProvider;

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
        $value = KodeAkses::select('*')->get()->count();
        view()->share('kd', $value);
    }
}
