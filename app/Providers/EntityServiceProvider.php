<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Service\PersonService;
use App\Service\ServiceImpl\PersonServiceImpl;

class EntityServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PersonService::class, PersonServiceImpl::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
