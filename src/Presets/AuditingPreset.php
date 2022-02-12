<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class AuditingPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['owen-it/laravel-auditing'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
