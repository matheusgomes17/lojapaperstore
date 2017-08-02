<?php

namespace Snaketec\Providers;

use Illuminate\Support\ServiceProvider;
use Snaketec\Repositories\Backend\History\HistoryContract;
use Snaketec\Repositories\Backend\History\EloquentHistoryRepository;
use Snaketec\Repositories\Backend\History\Facades\History as HistoryFacade;

/**
 * Class HistoryServiceProvider.
 */
class HistoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HistoryContract::class, EloquentHistoryRepository::class);
        $this->app->bind('history', HistoryContract::class);
        $this->registerFacade();
    }

    public function registerFacade()
    {
        $this->app->booting(function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('History', HistoryFacade::class);
        });
    }
}