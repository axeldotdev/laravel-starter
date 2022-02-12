<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class BrowsershotPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['spatie/browsershot'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
