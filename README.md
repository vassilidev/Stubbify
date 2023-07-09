# Create and manage permission and roles for your user !

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vassilidev/stubbify.svg?style=flat-square)](https://packagist.org/packages/vassilidev/stubbify)
[![Total Downloads](https://img.shields.io/packagist/dt/vassilidev/stubbify.svg?style=flat-square)](https://packagist.org/packages/vassilidev/stubbify)

## Installation

You can install the package via composer:

```bash
composer require vassilidev/stubbify
```

## Usage

```php
\Vassilidev\Stubbify\Stubbify::make(
            inputFilePath: public_path('input.php.stub'),
            outputFilePath: public_path('output.php'),
            data: [
                '{{ pseudo }}' => 'Vassili',
            ],
            override: false,
        );
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Vassili JOFFROY](https://github.com/vassilidev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
