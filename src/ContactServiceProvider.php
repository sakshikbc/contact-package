<?php

namespace Sakshikbc\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        # code...
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../src/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contact'
        );
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);
    }

    public function register()
    {
        # code...
    }
}