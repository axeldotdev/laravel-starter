<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class BladeHeroiconsPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['blade-ui-kit/blade-heroicons'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }

    public function publishAssets(): void
    {
        $this->runCommand(
            'php',
            'artisan',
            'vendor:publish',
            '--tag=blade-heroicons-config',
        );
    }
}
