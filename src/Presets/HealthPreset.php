<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class HealthPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['spatie/laravel-health'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
