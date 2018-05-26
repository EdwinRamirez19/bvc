<?php

namespace App\Providers;

use Illuminate\Support\Facades\Teacher;
use Illuminate\Foundation\Support\Providers\TeacherServiceProvider as ServiceProvider;

class TeacherServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Teachers\Teacher' => [
            'App\Listeners\TeacherListener',
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
