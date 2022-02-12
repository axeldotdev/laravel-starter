<?php

namespace Axeldotdev\LaravelStarter;

use Axeldotdev\LaravelStarter\Commands\InstallCommand;
use Axeldotdev\LaravelStarter\Commands\MakePresetCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelStarterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-starter')
            ->hasConfigFile()
            ->hasCommands(
                InstallCommand::class,
                MakePresetCommand::class,
            );
    }
}
