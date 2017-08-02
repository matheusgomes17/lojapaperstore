<?php

namespace Snaketec\Foundation;

use Illuminate\Foundation\Application as LaravelApplication;

/**
 * Class Application
 *
 * Core of the Laravel framework in the power of the application
 */
class Application extends LaravelApplication
{
    /**
     * Application constructor.
     * @param null $basePath
     */
    public function __construct($basePath = null)
    {
        parent::__construct($basePath);
    }
}