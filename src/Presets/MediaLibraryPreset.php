<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class MediaLibraryPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['spatie/laravel-medialibrary'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
