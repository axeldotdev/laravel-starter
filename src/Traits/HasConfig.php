<?php

namespace Axeldotdev\LaravelStarter\Traits;

use Illuminate\Support\Collection;

trait HasConfig
{
    public function config(?string $index = null): Collection
    {
        $config = is_array(config('starter.presets.' . static::class))
            ? config('starter.presets.' . static::class)
            : [];

        if (is_null($index)) {
            return new Collection($config);
        }

        return config('starter.presets.' . static::class . $index);
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
