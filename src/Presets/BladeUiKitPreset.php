<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;
use Axeldotdev\LaravelStarter\Enums\PackageManager;

class BladeUiKitPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['blade-ui-kit/blade-ui-kit'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
