<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class SamlPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['onelogin/php-saml'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
