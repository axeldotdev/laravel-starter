<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class PassportPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['laravel/passport'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
