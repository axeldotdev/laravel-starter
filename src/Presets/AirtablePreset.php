<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class AirtablePreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['axeldotdev/laravel-airtable'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
