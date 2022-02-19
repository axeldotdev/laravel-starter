<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class BreezePreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => array_filter([
                ! $this->selected(JetstreamPreset::class) ? 'laravel/breeze' : '',
            ]),
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
            'breeze:install',
            $this->config('stack') ?? '',
        );
    }
}
