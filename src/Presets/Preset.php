<?php

namespace Axeldotdev\LaravelStarter\Preset;

use Axeldotdev\LaravelStarter\Contracts\Configurable;
use Axeldotdev\LaravelStarter\Contracts\Downloadable;
use Axeldotdev\LaravelStarter\Contracts\Installable;
use Axeldotdev\LaravelStarter\Contracts\labellable;
use Axeldotdev\LaravelStarter\Contracts\Registerable;
use Axeldotdev\LaravelStarter\Traits\HasCommands;
use Axeldotdev\LaravelStarter\Traits\HasConfig;
use Axeldotdev\LaravelStarter\Traits\HasPackages;
use Illuminate\Support\Str;

class Preset implements Configurable, Downloadable, Installable, labellable, Registerable
{
    use HasConfig;
    use HasPackages;
    use HasCommands;

    public const SUCCESS = true;
    public const FAILURE = false;

    public function install(): bool
    {
        if ($this instanceof Downloadable) {
            $this->installPackages();
            $this->publishAssets();
        }

        return Preset::SUCCESS;
    }

    public function label(): string
    {
        return Str::of(__CLASS__)
            ->before('Preset')
            ->snake()
            ->replace('_', ' ')
            ->ucfirst()
            ->__toString();
    }

    public function register(callable $callable): bool
    {
        return $callable(new static());
    }
}
