<?php

namespace Axeldotdev\LaravelStarter\Traits;

use Illuminate\Support\Collection;

trait HasConfig
{
    public function config(): Collection
    {
        $config = is_array(config('starter.presets.' . static::class))
            ? config('starter.presets.' . static::class)
            : [];

        return new Collection($config);
    }

    public function hasConfig(string ...$configs): bool
    {
        return $this->config()->has($configs);
    }

    public function selected(string ...$presets): bool
    {
        $config = is_array(config('starter.presets'))
            ? config('starter.presets')
            : [];

        return (new Collection($config))->has($presets);
    }
}
