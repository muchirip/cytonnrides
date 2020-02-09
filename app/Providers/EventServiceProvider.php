<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
            'App\Events\SeatBooked' => [
                'App\Listeners\SendBookingNotification',
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
use App\Events\SeatBooked;

class SendBookingNotification
{
    /**
     * Handle the given event.
     *
     * @param  \App\Events\SeatBooked
     * @return void
     */
    public function handle(SeatBooked $event)
    {
        //
    }
}