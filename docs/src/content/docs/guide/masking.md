---
title: Source Masking
description: Hide the source URL by encoding or encrypting it.
---

By default the source is URL-encoded and visible in the URL. A masker changes that. Pass it as the first argument of `Url::create()`.

## Encoding

`EncodingMasker` encodes the source as URL-safe Base64.

```php
use SomehowDigital\ImgProxy\Masker\EncodingMasker;

$url = Url::create(new EncodingMasker())
    ->source('https://example.com/image.jpg')
    ->options(new Width(100));

$url->build('png');
// _/w:100/aHR0cHM6Ly9leGFtcGxlLmNvbS9pbWFnZS5qcGc.png
```

Encoding is not secret: anyone can decode it.

## Encryption

`EncryptionMasker` encrypts the source with AES-CBC. It needs the hexadecimal key that is configured in imgproxy as `IMGPROXY_SOURCE_URL_ENCRYPTION_KEY`. The key length selects the cipher: 16 bytes for AES-128, 24 for AES-192 and 32 for AES-256.

```php
use SomehowDigital\ImgProxy\Masker\EncryptionMasker;

$url = Url::create(new EncryptionMasker($key))
    ->source('https://example.com/image.jpg')
    ->options(new Width(100));

$url->build();
// _/w:100/enc/<encrypted-source>
```

Every call uses a fresh random initialization vector, so the same URL builds to different results.

A key that is not hexadecimal or has another length throws an `InvalidArgumentException`.

## Custom maskers

Implement `MaskerInterface`, see the [API reference](/api/maskers/).
