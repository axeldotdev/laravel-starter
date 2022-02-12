<?php

namespace Axeldotdev\LaravelStarter\Contracts;

use Illuminate\Support\Collection;

interface Configurable
{
    public function config(): Collection;

    public function hasConfig(string ...$configs): bool;

    public function selected(string ...$presets): bool;
}
