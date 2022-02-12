<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class MarkdownPreset extends Preset
{
    public function packages(): Collection
    {
        return new Collection([
            'composer' => ['spatie/laravel-markdown'],
        ]);
    }

    public function install(): bool
    {
        parent::install();

        // TODO: code here

        return Preset::SUCCESS;
    }
}
