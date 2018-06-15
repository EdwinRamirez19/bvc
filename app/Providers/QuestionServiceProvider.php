<?php

namespace App\Providers;

use Illuminate\Support\Facades\Question;
use Illuminate\Foundation\Support\Providers\QuestionServiceProvider as ServiceProvider;

class QuestionServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Questions\Question' => [
            'App\Listeners\QuestionListener',
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
