<?php

namespace App\Presets;

use App\Installable;
use LaravelZero\Framework\Commands\Command;

class Inertia implements Installable
{
    public static function handle(Command $command, array $options = []): bool
    {
        if (! $options['jetstream']
            && $command->confirm('Do you wish to use Inertia JS?')) {
            $command->task(
                'Installing Inertia JS',
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
