<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class BugsnagPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['bugsnag/bugsnag-laravel'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
