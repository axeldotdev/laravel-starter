<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class ScoutPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['laravel/scout'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
