---
title: MaxBytes
description: "Lowers the quality until the result fits in a number of bytes."
option:
  class: MaxBytes
  name: max_bytes
  alias: mb
  category: Output
  pro: false
---

Lowers the quality until the result fits in a number of bytes.

**imgproxy:** `max_bytes` (alias `mb`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\MaxBytes;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new MaxBytes(50000));

$url->build();
// _/mb:50000/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `mb:50000`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$bytes` | `int` | required | Maximum size in bytes. `0` disables the limit. |

## Notes

- Only works for JPEG, WebP, HEIC and TIFF.

## See also

- [Quality](/api/options/output/quality/)
- [AutoQuality](/api/options/output/auto-quality/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#max-bytes)
