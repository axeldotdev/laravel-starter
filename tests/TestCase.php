<?php

namespace Axeldotdev\LaravelStarter\Tests;

use Axeldotdev\LaravelStarter\LaravelStarterServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [LaravelStarterServiceProvider::class];
    }
}
