<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class LivewirePreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => array_filter([
                ! $this->selected(JetstreamPreset::class, BreezePreset::class, InertiaPreset::class, VuePreset::class)
                    ? 'livewire/livewire'
                    : '',
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
