<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;
use Axeldotdev\LaravelStarter\Enums\PackageManager;

class RayPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['spatie/laravel-ray'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
