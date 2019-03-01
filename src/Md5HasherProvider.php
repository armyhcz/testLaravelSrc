<?php

namespace Laravist\Hasher;

use Illuminate\Support\ServiceProvider;

class Md5HasherProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('md5hash',function (){
            return new Md5Hasher();
        });
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
