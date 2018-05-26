<?php

namespace App\Providers;

use Illuminate\Support\Facades\School;
use Illuminate\Foundation\Support\Providers\SchoolServiceProvider as ServiceProvider;

class SchoolServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Schools\School' => [
            'App\Listeners\SchoolListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
