<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class VuePreset extends Preset
{
    public function devRequired(): bool
    {
        return true;
    }

    public function packages(): Collection
    {
        return new Collection([
            'npm' => array_filter([
                ! $this->selected(JetstreamPreset::class, BreezePreset::class, LivewirePreset::class) ? 'vue' : '',
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
