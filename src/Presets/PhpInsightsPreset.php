<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class PhpInsightsPreset extends Preset
{
    public function devRequired(): bool
    {
        return true;
    }

    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['nunomaduro/phpinsights'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
