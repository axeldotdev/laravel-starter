<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Illuminate\Support\Collection;
use Axeldotdev\LaravelStarter\Enums\PackageManager;

class TailwindPreset extends Preset
{
    public function devRequired(): bool
    {
        return true;
    }

    public function packages(): Collection
    {
        return new Collection([
            'npm' => array_filter([
                'tailwindcss',
                'postcss',
                'autoprefixer',
                $this->hasConfig('typography') ? '@tailwindcss/typography' : '',
                $this->hasConfig('forms') ? '@tailwindcss/forms' : '',
                $this->hasConfig('line_clamp') ? '@tailwindcss/line-clamp' : '',
                $this->hasConfig('headless') && $this->selected(JetstreamPreset::class, BreezePreset::class, VuePreset::class)
                    ? '@headlessui/vue'
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
