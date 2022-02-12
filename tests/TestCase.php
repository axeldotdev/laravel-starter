<?php

namespace Axeldotdev\LaravelStarter\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Axeldotdev\LaravelStarter\LaravelStarterServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [LaravelStarterServiceProvider::class];
    }
}
