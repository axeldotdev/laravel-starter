<?php

namespace App\Presets;

use App\Installable;
use LaravelZero\Framework\Commands\Command;

class Jetstream implements Installable
{
    public static function handle(Command $command, array $options = []): bool
    {
        if (! $options['nova']
            && $command->confirm('Do you wish to use Laravel Jetstream?')) {
            $command->task(
                'Installing Laravel Jetstream',
                fn () => static::install($command)
            );

            return true;
        }

        return false;
    }

    public static function install(Command $command): bool
    {
        return true;
    }
}
