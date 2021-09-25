<?php

namespace App\Presets;

use App\Installable;
use LaravelZero\Framework\Commands\Command;

class Nova implements Installable
{
    public static function handle(Command $command, array $options = []): bool
    {
        if ($command->confirm('Do you wish to use Laravel Nova?')) {
            $command->task(
                'Installing Laravel Nova',
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
