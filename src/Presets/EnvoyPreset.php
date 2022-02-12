<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class EnvoyPreset extends Preset
{
    public function devRequired(): bool
    {
        return true;
    }

    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['laravel/envoy'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
