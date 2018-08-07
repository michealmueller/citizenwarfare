<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\NewRegistration' => [
            'App\Listeners\SendVerificationEmail',
        ],
        'DevDojo\Chatter\Events\ChatterAfterNewDiscussion' => [
            'App\Listeners\HandleNewDiscussion',
        ],
        'App\Events\NewUser' => [
            'App\Listeners\NewUserListener',
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
