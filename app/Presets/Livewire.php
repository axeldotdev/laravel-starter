<?php

namespace App\Presets;

use App\Installable;
use LaravelZero\Framework\Commands\Command;

class Livewire implements Installable
{
    public static function handle(Command $command, array $options = []): bool
    {
        if (! $options['jetstream']
            && ! $options['inertia']
            && $command->confirm('Do you wish to use Livewire?')) {
            $command->task(
                'Installing Livewire',
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
