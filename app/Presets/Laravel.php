<?php

namespace App\Presets;

use App\Installable;
use LaravelZero\Framework\Commands\Command;

class Laravel implements Installable
{
    public static function handle(Command $command, array $options = []): bool
    {
        $command->task(
            'Installing Laravel',
            fn () => static::install($command)
        );

        return true;
    }

    public static function install(Command $command): bool
    {
        return true;
    }
}
