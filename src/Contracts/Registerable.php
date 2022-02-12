<?php

namespace Axeldotdev\LaravelStarter\Contracts;

interface Registerable
{
    public function register(callable $callable): bool;
}
