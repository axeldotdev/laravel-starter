# Laravel Starter

[![Latest Version on Packagist](https://img.shields.io/packagist/v/axeldotdev/laravel-starter.svg?style=flat-square)](https://packagist.org/packages/axeldotdev/laravel-starter)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/axeldotdev/laravel-starter/run-tests?label=tests)](https://github.com/axeldotdev/laravel-starter/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/axeldotdev/laravel-starter/Check%20&%20fix%20styling?label=code%20style)](https://github.com/axeldotdev/laravel-starter/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/axeldotdev/laravel-starter.svg?style=flat-square)](https://packagist.org/packages/axeldotdev/laravel-starter)

Laravel Starter allow you to easily bootstrap your application with common package like Horizon, Larastan, Fortify, etc. and the configuration they need.

## Installation

You can install the package via composer:

```bash
composer require --dev axeldotdev/laravel-starter
```

The minimum PHP version required is **8.1**.

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-starter-config"
```

## Usage

You can run the install command and it will install all the selected presets in the config file:

```bash
php artisan starter:install
```

**I plan to allow you to run specific preset directly in the command line without worring about the config file in the future.**

After the presets installation, you can remove the config file and the all package if you want or you can leave it in your application for later. If you need a package in the future, it may be in the starter and you don't need to think about configuration.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Axel Charpentier](https://github.com/axeldotdev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
