<?php

namespace App\Presets;

use App\Installable;
use LaravelZero\Framework\Commands\Command;

class Pest implements Installable
{
    public static function handle(Command $command, array $options = []): bool
    {
        if ($command->confirm('Do you wish to use Pest instead of PHPUnit?')) {
            $command->task(
                'Installing Pest',
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
