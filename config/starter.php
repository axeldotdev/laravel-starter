<?php

return [
    'presets' => [
        /*
        |--------------------------------------------------------------------------
        | Base Presets
        |--------------------------------------------------------------------------
        */

        \Axeldotdev\LaravelStarter\Preset\BasePreset::class => [
            'changelog' => true,
            'github_config' => true,
            'git_repo' => true,
            'license' => 'MIT',
            'author_name' => null,
            'author_username' => null,
            'author_email' => null,
        ],

        /*
        |--------------------------------------------------------------------------
        | Dev Presets
        |--------------------------------------------------------------------------
        */

        \Axeldotdev\LaravelStarter\Preset\HorizonPreset::class => [
            'dark_mode' => false,
            'domain' => null,
            'path' => 'tools/horizon',
        ],
        \Axeldotdev\LaravelStarter\Preset\TelescopePreset::class => [
            'dark_mode' => false,
            'domain' => null,
            'path' => 'tools/telescope',
        ],
        \Axeldotdev\LaravelStarter\Preset\HealthPreset::class => [
            'dark_mode' => false,
            'path' => 'tools/health',
        ],
        \Axeldotdev\LaravelStarter\Preset\LarastanPreset::class => [
            'level' => 9,
        ],
        \Axeldotdev\LaravelStarter\Preset\PatrolPreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\PhpInsightsPreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\PhpCodeFixerPreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\PestPreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\DuskPreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\RayPreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\HeloPreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\SailPreset::class => [
            'redis' => true,
            'mailhog' => false,
            'meilisearch' => false,
            'minio' => false,
            'selenium' => true,
        ],
        \Axeldotdev\LaravelStarter\Preset\IdeHelperPreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\PrettierPreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\SentryPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\BugsnagPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\FlarePreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\EnvoyPreset::class => null,

        /*
        |--------------------------------------------------------------------------
        | Starter Kit Presets
        |--------------------------------------------------------------------------
        */

        // \Axeldotdev\LaravelStarter\Preset\JetstreamPreset::class => [
        //     'stack' => 'livewire',
        //     'teams' => true,
        // ],
        // \Axeldotdev\LaravelStarter\Preset\BreezePreset::class => [],

        /*
        |--------------------------------------------------------------------------
        | Back Presets
        |--------------------------------------------------------------------------
        */

        // \Axeldotdev\LaravelStarter\Preset\Airtable::class => null,
        // \Axeldotdev\LaravelStarter\Preset\ImpersonatePreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\ExcelPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\SamlPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\NovaPreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\ScoutPreset::class => [
            'driver' => 'database',
        ],
        // \Axeldotdev\LaravelStarter\Preset\SocialitePreset::class => [
        //     'facebook' => false,
        //     'twitter' => false,
        //     'linkedin' => false,
        //     'google' => false,
        //     'github' => false,
        //     'gitlab' => false,
        //     'bitbucket' => false,
        // ],
        // \Axeldotdev\LaravelStarter\Preset\PassportPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\LighthousePreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\LivewirePreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\InertiaPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\AuditingPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\DataTransferObjectPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\DataPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\ActivityLogPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\PermissionsPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\MediaLibraryPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\BackupPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\CalendarGeneratorPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\BrowsershotPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\MarkdownPreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\ZiggyPreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\BladeUiKitPreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\BladeHeroiconsPreset::class => null,

        /*
        |--------------------------------------------------------------------------
        | Front Presets
        |--------------------------------------------------------------------------
        |
        */

        \Axeldotdev\LaravelStarter\Preset\AlpinePreset::class => null,
        // \Axeldotdev\LaravelStarter\Preset\VuePreset::class => null,
        \Axeldotdev\LaravelStarter\Preset\TailwindPreset::class => [
            'forms' => true,
            'typography' => true,
            'line_clamp' => false,
            'headless' => false,
        ],
    ],
];
