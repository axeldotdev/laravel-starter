<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;
use Axeldotdev\LaravelStarter\Enums\PackageManager;

class InertiaPreset extends Preset
{
    public function packages(): Collection
    {
        return ! $this->selected(JetstreamPreset::class, BreezePreset::class, LivewirePreset::class)
            && $this->selected(VuePreset::class) ? new Collection([
                'composer' => ['inertiajs/inertia-laravel'],
                'npm' => ['@inertiajs/inertia', '@inertiajs/inertia-vue3'],
            ]) : new Collection();
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
