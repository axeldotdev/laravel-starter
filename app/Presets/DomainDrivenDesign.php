<?php

namespace App\Presets;

use App\Installable;
use LaravelZero\Framework\Commands\Command;

class DomainDrivenDesign implements Installable
{
    public static function handle(Command $command, array $options = []): bool
    {
        if ($command->confirm('Do you wish to use Domain Driven Design?')) {
            $command->task(
                'Changing your project structure',
                fn () => static::install($command)
            );

            return true;
        }

        return false;
    }

    public static function install(Command $command): void
    {
    }
}
