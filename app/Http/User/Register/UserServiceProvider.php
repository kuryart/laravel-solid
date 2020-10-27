<?php

namespace App\Http\User\Register;

use Illuminate\Support\ServiceProvider;

class UserRegisterServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->app->bind(
            'App\Contracts\EventPusher',
            'App\Services\RedisEventPusher'
        );
    }
}
