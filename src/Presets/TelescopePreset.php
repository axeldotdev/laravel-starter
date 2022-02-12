<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class TelescopePreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['laravel/telescope'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
