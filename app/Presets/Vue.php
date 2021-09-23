<?php

namespace App\Presets;

use App\Installable;
use LaravelZero\Framework\Commands\Command;

class Vue implements Installable
{
    public static function handle(Command $command, array $options = []): bool
    {
        if (! $options['jetstream']
            && ! $options['inertia']
            && ! $options['livewire']
            && $command->confirm('Do you wish to use Vue JS?')) {
            $command->task(
                'Installing Vue JS',
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
