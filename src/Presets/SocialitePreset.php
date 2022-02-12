<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class SocialitePreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => array_filter([
                $this->selected(JetstreamPreset::class) ? 'joelbutcher/socialstream' : 'laravel/socialite',
            ]),
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
