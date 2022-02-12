<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class CalendarGeneratorPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['spatie/icalendar-generator'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
