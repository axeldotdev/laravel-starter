<?php

namespace Axeldotdev\LaravelStarter\Preset;

class BasePreset extends Preset
{
    public function install(): bool
    {
        parent::install();

        // TODO: code here

        // TODO: do not forget to install doctrine/dbal by default

        return Preset::SUCCESS;
    }
}
