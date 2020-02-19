# Paddle SDK for PHP

[![Latest Version](https://badgen.net/packagist/v/kodekeep/paddle-sdk)](https://packagist.org/packages/kodekeep/paddle-sdk)
[![Software License](https://badgen.net/packagist/license/kodekeep/paddle-sdk)](https://packagist.org/packages/kodekeep/paddle-sdk)
[![Build Status](https://img.shields.io/github/workflow/status/kodekeep/paddle-sdk/run-tests?label=tests)](https://github.com/kodekeep/paddle-sdk/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/kodekeep/paddle-sdk)](https://codeclimate.com/github/kodekeep/paddle-sdk)
[![Quality Score](https://badgen.net/codeclimate/maintainability/kodekeep/paddle-sdk)](https://codeclimate.com/github/kodekeep/paddle-sdk)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/paddle-sdk)](https://packagist.org/packages/kodekeep/paddle-sdk)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides a [Paddle API](https://developer.paddle.com/api-reference/intro) integration.

## Installation

```bash
composer require kodekeep/paddle-sdk
```

## Usage

``` php
$client = new KodeKeep\Paddle\Client('vendorId', 'vendorAuthCode');

$client->product()->plans()->all();
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

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

Paddle SDK is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
