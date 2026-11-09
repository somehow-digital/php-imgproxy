---
title: FormatQuality
description: "Sets the quality for individual output formats."
option:
  class: FormatQuality
  name: format_quality
  alias: fq
  category: Output
  pro: false
---

Sets the quality for individual output formats.

**imgproxy:** `format_quality` (alias `fq`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\FormatQuality;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new FormatQuality(['jpeg' => 80, 'webp' => 70]));

$url->build();
// _/fq:jpeg:80:webp:70/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `fq:jpeg:80:webp:70`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$qualities` | `array` | required | A map of format to quality. It must not be empty. |

## Notes

- An empty array throws an `InvalidArgumentException`.

## See also

- [Quality](/api/options/output/quality/)
- [AutoQuality](/api/options/output/auto-quality/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#format-quality)
