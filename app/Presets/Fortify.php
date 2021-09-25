<?php

namespace App\Presets;

use App\Installable;
use LaravelZero\Framework\Commands\Command;

class Fortify implements Installable
{
    public static function handle(Command $command, array $options = []): bool
    {
        if (! $options['jetstream']
            && $command->confirm('Do you wish to use Laravel Fortify?')) {
            $command->task(
                'Installing Laravel Fortify',
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
