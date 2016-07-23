<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Mi\Repositories\CategoryRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 使用对象型态的视图组件...
        view()->composer(
            'layouts.app', 'App\Http\ViewComposers\AppViewComposer'
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
