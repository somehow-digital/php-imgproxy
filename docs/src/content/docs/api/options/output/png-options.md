---
title: PngOptions
description: "Sets PNG encoder options."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: PngOptions
  name: png_options
  alias: pngo
  category: Output
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Sets PNG encoder options.

**imgproxy:** `png_options` (alias `pngo`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\PngOptions;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new PngOptions(true, true, 64));

$url->build();
// _/pngo:1:1:64/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `pngo:1:1:64`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$interlaced` | `bool` | — | Write an interlaced PNG. |
| `$quantize` | `bool` | — | Quantize the image to a palette. |
| `$quantizationColors` | `int` | — | Number of colors of the palette. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- All arguments are optional.

## See also

- [JpegOptions](/api/options/output/jpeg-options/)
- [WebpOptions](/api/options/output/webp-options/)
- [AvifOptions](/api/options/output/avif-options/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#png-options)
