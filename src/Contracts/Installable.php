<?php

namespace Axeldotdev\LaravelStarter\Contracts;

interface Installable
{
    public function install(): bool;
}
