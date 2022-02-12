<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class ZiggyPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['tightenco/ziggy'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
