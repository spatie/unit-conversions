
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Perform unit conversions in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/spatie/unit-conversions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/unit-conversions/run-tests?label=tests)](https://github.com/spatie/unit-conversions/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/spatie/unit-conversions)

This package can perform various unit conversions. Right now, only kg to lbs is supported.

Here's how to use it:

```php
use Spatie\UnitConversions\Weight;

Weight::fromKilograms(100)->toLbs(); // returns 220.4623;
```

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/unit-conversions.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/unit-conversions)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require spatie/unit-conversions
```

## Usage

#### From kg to lbs

```php
Spatie\UnitConversions\Weight::fromKilograms(100)->toLbs(); // returns 220.4623;
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
