<?php

namespace Axeldotdev\LaravelStarter\Contracts;

use Illuminate\Support\Collection;

interface Downloadable
{
    public function devRequired(): bool;

    public function installComposerPackages(): void;

    public function installNpmPackages(): void;

    public function installPackages(): void;

    public function packages(): Collection;

    public function publishAssets(): void;
}
