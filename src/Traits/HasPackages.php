<?php

namespace Axeldotdev\LaravelStarter\Traits;

use Illuminate\Support\Collection;
use Axeldotdev\LaravelStarter\Enums\PackageManager;

trait HasPackages
{
    public function devRequired(): bool
    {
        return false;
    }

    public function installComposerPackages(): void
    {
        $this->runCommand(
            'composer',
            'require',
            $this->devRequired() ? '--dev' : '',
            ...$this->packages()['composer'],
        );
    }

    public function installNpmPackages(): void
    {
        $this->runCommand(
            'npm',
            'install',
            $this->devRequired() ? '-D' : '',
            ...$this->packages()['npm'],
        );
    }

    public function installPackages(): void
    {
        if ($this->packages()->isEmpty()) {
            return;
        }

        if ($this->packages()->has('composer')
            && count($this->packages()['composer'])) {
            $this->installComposerPackages();
        }

        if ($this->packages()->has('npm')
            && count($this->packages()['npm'])) {
            $this->installNpmPackages();
        }
    }

    public function packages(): Collection
    {
        return new Collection([
            'composer' => [],
            'npm' => [],
        ]);
    }

    public function publishAssets(): void
    {
    }
}
