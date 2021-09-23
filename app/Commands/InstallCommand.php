<?php

namespace App\Commands;

use App\Presets\Nova;
use App\Presets\Pest;
use App\Presets\Fortify;
use App\Presets\Inertia;
use App\Presets\Laravel;
use App\Presets\Livewire;
use App\Presets\Jetstream;
use App\Presets\DomainDrivenDesign;
use LaravelZero\Framework\Commands\Command;
use App\Presets\Vue;

class InstallCommand extends Command
{
    protected $signature = 'new {name : Your project name}';

    protected $description = 'This command helps you to install your Laravel project.';

    public function handle()
    {
        $options = [];
        $options['laravel'] = Laravel::handle($this);
        $options['pest'] = Pest::handle($this);
        $options['nova'] = Nova::handle($this);
        $options['jetstream'] = Jetstream::handle($this, $options);
        $options['fortify'] = Fortify::handle($this, $options);
        $options['inertia'] = Inertia::handle($this, $options);
        $options['livewire'] = Livewire::handle($this, $options);
        $options['vue'] = Vue::handle($this, $options);

        // TODO: other tasks

        $options['ddd'] = DomainDrivenDesign::handle($this, $options);

        $this->notify('Hello Web Artisan', 'Your Laravel project is ready!');

        return Command::SUCCESS;
    }
}
