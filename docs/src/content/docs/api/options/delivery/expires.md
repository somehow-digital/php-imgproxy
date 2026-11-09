---
title: Expires
description: "Makes the URL expire."
option:
  class: Expires
  name: expires
  alias: exp
  category: Delivery
  pro: false
---

Makes the URL expire. imgproxy answers with a 404 error after the timestamp.

**imgproxy:** `expires` (alias `exp`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Expires;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Expires(1893456000));

$url->build();
// _/exp:1893456000/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `exp:1893456000`.

## Parameters

| Parameter    | Type  | Default  | Description       |
| ------------ | ----- | -------- | ----------------- |
| `$timestamp` | `int` | required | A Unix timestamp. |

## See also

- [CacheBuster](/api/options/delivery/cache-buster/)
- [Signing](/guide/signing/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#expires)
