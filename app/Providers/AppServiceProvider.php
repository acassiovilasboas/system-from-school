<?php

namespace App\Providers;

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
        $this->app->bind('App\Interfaces\SchoolRepositoryInterface', 'App\Repositories\Eloquent\SchoolRepository');
        $this->app->bind('App\Interfaces\StudentRepositoryInterface', 'App\Repositories\Eloquent\StudentRepository');
        $this->app->bind('App\Interfaces\SchoolClassRepositoryInterface', 'App\Repositories\Eloquent\SchoolClassRepository');
        $this->app->bind('App\Interfaces\ClassStudentRepositoryInterface', 'App\Repositories\Eloquent\ClassStudentRepository');
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
