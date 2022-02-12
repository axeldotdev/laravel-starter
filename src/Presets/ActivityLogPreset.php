<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Axeldotdev\LaravelStarter\Enums\PackageManager;
use Illuminate\Support\Collection;

class ActivityLogPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['spatie/laravel-activitylog'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
