---
title: Secure URLs
description: Sign, mask and expire URLs.
---

An expired URL answers with a 404, so a leaked link stops working. Signing makes sure nobody can change the timestamp, and masking hides the source URL.

The key and salt are the hexadecimal values that are configured in imgproxy. See [Signing](/guide/signing/).

```php
use SomehowDigital\ImgProxy\Masker\EncodingMasker;
use SomehowDigital\ImgProxy\Option\Expires;
use SomehowDigital\ImgProxy\Option\Width;
use SomehowDigital\ImgProxy\Signer\Signer;
use SomehowDigital\ImgProxy\Url;

$url = Url::create(new EncodingMasker(), new Signer($key, $salt))
    ->source('https://example.com/photos/cat.jpg')
    ->options(new Expires(time() + 3600), new Width(300));

$url->build();
// {signature}/exp:{timestamp}/w:300/aHR0cHM6Ly9leGFtcGxlLmNvbS9waG90b3MvY2F0LmpwZw
```

## Related

- [Signing](/guide/signing/)
- [Source masking](/guide/masking/)
- [`Expires`](/api/options/delivery/expires/)
