<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class LarastanPreset extends Preset
{
    public function devRequired(): bool
    {
        return true;
    }

    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['nunomaduro/larastan'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
