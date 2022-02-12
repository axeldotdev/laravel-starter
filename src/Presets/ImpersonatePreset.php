<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class ImpersonatePreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['lab404/laravel-impersonate'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
