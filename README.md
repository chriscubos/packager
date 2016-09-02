# Packager

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


Make Laravel Packages faster.

## Install

Via Composer

``` bash
$ composer require chriscubos/packager
```

## Usage

``` php
<?php

namespace Vendor\Package;

class ServiceProvider extends \Chriscubos\Packager\ServiceProvider
{
    public function boot()
    {
        $this->publishAll();
    }
}

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email chriscubos@outlook.com instead of using the issue tracker.

## Credits

- [Christopher John Cubos][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/chriscubos/packager.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/chriscubos/packager/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/chriscubos/packager.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/chriscubos/packager.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/chriscubos/packager.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/chriscubos/packager
[link-travis]: https://travis-ci.org/chriscubos/packager
[link-scrutinizer]: https://scrutinizer-ci.com/g/chriscubos/packager/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/chriscubos/packager
[link-downloads]: https://packagist.org/packages/chriscubos/packager
[link-author]: https://github.com/chriscubos
[link-contributors]: ../../contributors
