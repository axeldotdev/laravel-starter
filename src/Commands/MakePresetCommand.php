<?php

namespace Axeldotdev\LaravelStarter\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class MakePresetCommand extends Command
{
    /** @var string */
    public $signature = 'make:preset {name: The preset name}';

    /** @var string */
    public $description = 'Make your own preset.';

    public function handle(Filesystem $filesystem): int
    {
        $name = is_string($this->argument('name')) ? $this->argument('name') : '';

        $filesystem->ensureDirectoryExists(app_path('Presets'));

        if (! Str::of($name)->endsWith('Preset')) {
            $name = "{$name}Preset";
        }

        $stub_path = dirname(__DIR__) . '/stubs/Preset.stub';

        $filesystem->copy($stub_path, app_path("Presets/{$name}.php"));

        $filesystem->replaceInFile('{name}', $name, app_path("Presets/{$name}.php"));

        return self::SUCCESS;
    }
}
