<?php

namespace Axeldotdev\LaravelStarter\Commands;

use Axeldotdev\LaravelStarter\Preset\Preset;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;

class InstallCommand extends Command
{
    /** @var string */
    public $signature = 'starter:install';

    /** @var string */
    public $description = 'Install your selected presets.';

    public function handle(): int
    {
        $this->presets()->each(function (string $preset_class) {
            $preset_class::register([$this, 'install']);
        });

        return self::SUCCESS;
    }

    private function install(Preset $preset): bool
    {
        $this->info("{$preset->label()} installation...");

        $result = $preset->install();

        if (! $result) {
            $this->info("{$preset->label()} installation failed.");

            return false;
        }

        $this->info("{$preset->label()} installed.");

        return true;
    }

    private function presets(): Collection
    {
        $config = is_array(config('starter.presets'))
            ? config('starter.presets')
            : [];

        return (new Collection($config))->keys();
    }
}
