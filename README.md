# imgproxy URL Builder for PHP

`imgproxy` URL Builder is a PHP library for generating [imgproxy](https://imgproxy.net/)
URLs in a type-safe, immutable, and composable way.

## Features

- Immutable URL builder object
- Fluent API via method chaining
- Extensible test suite
- Supports all `imgproxy` options
- Supports `imgproxy` chained pipelines
- Supports `imgproxy` source URL masking
- Supports `imgproxy` URL signing

## Installation

```bash
composer require somehow-digital/imgproxy
```

## Usage

**Basic URL**
```php
use SomehowDigital\ImgProxy\Url;

$url = new Url();

$url = $url->source('https://example.com/image.jpg');

$url = $url->options(
    new Width(100),
    new Height(100),
);

$url->build(); // _/w:100/h:100/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

**Chained pipeline**
```php
use SomehowDigital\ImgProxy\Url;

$url = new Url();

$url = $url->source('https://example.com/image.jpg');

$url = $url->options(
    new Crop(1000, 1000),
    [
        new Width(100),
        new Height(100),
    ],
);

$url->build(); // _/c:1000:1000/-/w:100/h:100/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

**Base64-Encoded Source URL**
```php
use SomehowDigital\ImgProxy\Url;

$url = new Url(
    new EncodingMasker(),
);

$url = $url->source('https://example.com/image.jpg');

$url = $url->options(
    new Width(100),
    new Height(100),
);

$url->build(); // _/w:100/h:100/aHR0cHM6Ly9leGFtcGxlLmNvbS9pbWFnZS5qcGc
```

**HMAC-Encrypted Source URL**
```php
use SomehowDigital\ImgProxy\Url;

$url = new Url(
    new EncryptionMasker(ENCRYPTION_KEY),
);

$url = $url->source('https://example.com/image.jpg');

$url = $url->options(
    new Width(100),
    new Height(100),
);

$url->build(); // _/w:100/h:100/enc/p5VjorNdhs7mRRw8.jpg
```

**Signed URL**
```php
use SomehowDigital\ImgProxy\Url;

$url = new Url(
    new EncryptionMasker(ENCRYPTION_KEY),
    new Signer(SIGNATURE_KEY, SIGNATURE_SALT),
);

$url = $url->source('https://example.com/image.jpg');

$url = $url->options(
    new Width(100),
    new Height(100),
);

$url->build(); // oKfUtW34Dvo2BGQe/w:100/h:100/enc/p5VjorNdhs7mRRw8.png
```

**Fluent API**
```php
use SomehowDigital\ImgProxy\Url;

$url = Url::create(
    new EncryptionMasker(ENCRYPTION_KEY),
    new Signer(SIGNATURE_KEY, SIGNATURE_SALT),
)
->source('https://example.com/image.png')
->options(
    new Width(100),
    new Height(100),
)
->build(); // oKfUtW34Dvo2BGQe/w:100/h:100/enc/p5VjorNdhs7mRRw8.png
```
