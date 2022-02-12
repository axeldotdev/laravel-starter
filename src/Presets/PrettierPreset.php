<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;

class PrettierPreset extends Preset
{
    public function devRequired(): bool
    {
        return true;
    }

    public function packages(): Collection
    {
        return new Collection([
            'npm' => array_filter([
                'prettier',
                $this->selected(TailwindPreset::class) ? 'prettier-plugin-tailwindcss' : '',
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
