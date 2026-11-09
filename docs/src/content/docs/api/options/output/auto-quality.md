---
title: AutoQuality
description: "Picks the quality automatically by encoding the image several times."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: AutoQuality
  name: autoquality
  alias: aq
  category: Output
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Picks the quality automatically by encoding the image several times. It overrides the imgproxy configuration.

**imgproxy:** `autoquality` (alias `aq`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\AutoQuality;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new AutoQuality('dssim', 0.02, 40, 90));

$url->build();
// _/aq:dssim:0.02:40:90/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `aq:dssim:0.02:40:90`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$method` | `string` | — | The method used to compare results, such as `size` or `dssim`. |
| `$target` | `float` | — | The quality target of the method. |
| `$minQuality` | `int` | — | Lowest quality to try. |
| `$maxQuality` | `int` | — | Highest quality to try. |
| `$allowedError` | `float` | — | Tolerated deviation from the target. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- All arguments are optional. See the imgproxy reference for the available methods.

## See also

- [Quality](/api/options/output/quality/)
- [FormatQuality](/api/options/output/format-quality/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#autoquality)
