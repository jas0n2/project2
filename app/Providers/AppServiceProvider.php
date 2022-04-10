<?php

namespace App\Providers;
use App\Models\Setting;
use DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $settings = DB::table('settings')->get();
        $cover = DB::table('covers')->get();

        View::share('setting',$settings);
        View::share('cover',$cover);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
