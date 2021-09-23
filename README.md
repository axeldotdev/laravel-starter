# This package helps you start your Laravel project.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/axeldotdev/laravel-starter.svg?style=flat-square)](https://packagist.org/packages/axeldotdev/laravel-starter)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/axeldotdev/laravel-starter/run-tests?label=tests)](https://github.com/axeldotdev/laravel-starter/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/axeldotdev/laravel-starter/Check%20&%20fix%20styling?label=code%20style)](https://github.com/axeldotdev/laravel-starter/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/axeldotdev/laravel-starter.svg?style=flat-square)](https://packagist.org/packages/axeldotdev/laravel-starter)

This package helps you start your Laravel project.

## Installation

You can install the package via composer:

```bash
composer require axeldotdev/laravel-starter
```

## Usage

```php
$laravel-starter = Axeldotdev\laravel-starter\Country::all(translation: LANG::EN);

$european_laravel-starter = Axeldotdev\laravel-starter\Country::european(translation: Lang::FR);
```

This package only supports english and french. Feel free to add other lang with a PR.

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
