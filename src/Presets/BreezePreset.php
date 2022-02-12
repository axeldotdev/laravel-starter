<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;
use Axeldotdev\LaravelStarter\Enums\PackageManager;

class BreezePreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => array_filter([
                ! $this->selected(JetstreamPreset::class) ? 'laravel/breeze' : '',
            ]),
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}