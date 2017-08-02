<?php

namespace Snaketec\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

/**
 * Class EventServiceProvider.
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [];

    /**
     * Class event subscribers.
     *
     * @var array
     */
    protected $subscribe = [
        /*
         * Frontend Subscribers
         */

        /*
         * Auth Subscribers
         */
        \Snaketec\Listeners\Frontend\Auth\UserEventListener::class,

        /*
         * Backend Subscribers
         */

        /*
         * General Subscribers
         */
        \Snaketec\Listeners\Backend\General\Slider\SliderEventListener::class,

        /*
         * Access Subscribers
         */
        \Snaketec\Listeners\Backend\Access\User\UserEventListener::class,
        \Snaketec\Listeners\Backend\Access\Role\RoleEventListener::class,

        /*
         * Catalog Subscribers
         */
        \Snaketec\Listeners\Backend\Catalog\Category\CategoryEventListener::class,
        \Snaketec\Listeners\Backend\Catalog\Product\ProductEventListener::class,
        \Snaketec\Listeners\Backend\Catalog\Budget\BudgetEventListener::class,

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
