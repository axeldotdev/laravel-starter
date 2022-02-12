<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class LighthousePreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['nuwave/lighthouse', 'mll-lab/graphql-php-scalars'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
