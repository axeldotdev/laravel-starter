<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class ActivityLogPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['spatie/laravel-activitylog'],
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
            '--provider="Spatie\Activitylog\ActivitylogServiceProvider"',
            '--tag="activitylog-config"',
        );
        $this->runCommand(
            'php',
            'artisan',
            'vendor:publish',
            '--provider="Spatie\Activitylog\ActivitylogServiceProvider"',
            '--tag="activitylog-migrations"',
        );
        $this->runCommand('php', 'artisan', 'migrate');
    }
}
