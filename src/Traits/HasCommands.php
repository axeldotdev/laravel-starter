<?php

namespace Axeldotdev\LaravelStarter\Traits;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

trait HasCommands
{
    public function runCommand(string ...$command): void
    {
        $process = new Process(array_filter($command));

        $process->run();

        if (! $process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }
}
