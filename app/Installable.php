<?php

namespace App;

use LaravelZero\Framework\Commands\Command;

interface Installable
{
    public static function handle(Command $command, array $options = []): bool;

    public static function install(Command $command): bool;
}
