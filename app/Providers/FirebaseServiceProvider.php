<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Kreait\Firebase\Factory;

class FirebaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('firebase.firestore', function ($app) {
            return (new Factory)
                ->withServiceAccount(config('services.firebase.credentials'))
                ->withDatabaseUri('https://asistenang-default-rtdb.firebaseio.com')
                ->createFirestore();
        });

        $this->app->singleton('firebase.auth', function ($app) {
            return (new Factory)
                ->withServiceAccount(config('services.firebase.credentials'))
                ->createAuth();
        });

        $this->app->singleton('firebase.storage', function ($app) {
            return (new Factory)
                ->withServiceAccount(config('services.firebase.credentials'))
                ->createStorage();
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
