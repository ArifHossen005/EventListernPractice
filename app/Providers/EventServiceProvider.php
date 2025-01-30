<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\BlogPublished;
use App\Listeners\BlogPublishedAdminListener;
use App\Listeners\BlogPublishedUserListener;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        BlogPublished::class => [
            BlogPublishedAdminListener::class,
            BlogPublishedUserListener::class,
        ],
    ];

    public function boot()
    {
        parent::boot();
    }
}
