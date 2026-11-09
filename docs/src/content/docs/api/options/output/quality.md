---
title: Quality
description: "Sets the quality of the resulting image."
option:
  class: Quality
  name: quality
  alias: q
  category: Output
  pro: false
---

Sets the quality of the resulting image.

**imgproxy:** `quality` (alias `q`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Quality;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Quality(80));

$url->build();
// _/q:80/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `q:80`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$quality` | `int` | required | From 1 to 100. `0` uses the configured quality. |

## See also

- [FormatQuality](/api/options/output/format-quality/)
- [AutoQuality](/api/options/output/auto-quality/)
- [MaxBytes](/api/options/output/max-bytes/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#quality)
