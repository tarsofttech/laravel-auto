<?php

namespace Tarsoft\LaravelAuto;

use Illuminate\Support\ServiceProvider;
use Tarsoft\LaravelAuto\Commands\CrudCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            CrudCommand::class,
        ]);
    }

    public function boot()
    {
        // Optionally, you can publish package resources here
    }
}
