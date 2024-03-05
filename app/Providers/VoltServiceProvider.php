<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Volt\Volt;

class VoltServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            Volt::mount([
                config('livewire.view_path', resource_path('views/livewire')),
                resource_path('views/pages'),
            ]);
        }
    }
}
