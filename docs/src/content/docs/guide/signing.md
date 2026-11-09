---
title: Signing
description: Sign URLs with HMAC-SHA256.
---

imgproxy can reject URLs that are not signed. Pass a `Signer` as the second argument of `Url::create()`, with the hexadecimal key and salt that are configured as `IMGPROXY_KEY` and `IMGPROXY_SALT`.

```php
use SomehowDigital\ImgProxy\Signer\Signer;

$signer = new Signer($key, $salt);

$url = Url::create(null, $signer)
    ->source('https://example.com/image.jpg')
    ->options(new Width(100));

$url->build();
// pqw5H1GsOHf_2dz4AntYKn20eioydnoxQ8pbkR-0vew/w:100/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The signature replaces the `_` placeholder and covers the full path, including the masked source and the format.

Masking and signing combine:

```php
$url = Url::create(new EncodingMasker(), $signer);
```

A key or salt that is not hexadecimal throws an `InvalidArgumentException`.

:::caution
Keep the key and salt out of version control and out of client-side code.
:::
