<?php

namespace Axeldotdev\LaravelStarter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Axeldotdev\LaravelStarter\LaravelStarter
 */
class LaravelStarter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Axeldotdev\LaravelStarter\LaravelStarter::class;
    }
}
