<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class JetstreamPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => array_filter([
                ! $this->selected(BreezePreset::class) ? 'laravel/jetstream' : '',
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
            'jetstream:install',
            $this->config('stack') ?? '',
            $this->config('teams') ? '--teams' : '',
        );
    }
}
