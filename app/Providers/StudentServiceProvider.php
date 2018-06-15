<?php

namespace App\Providers;

use Illuminate\Support\Facades\Student;
use Illuminate\Foundation\Support\Providers\StudentServiceProvider as ServiceProvider;

class StudentServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Students\Student' => [
            'App\Listeners\StudentListener',
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
