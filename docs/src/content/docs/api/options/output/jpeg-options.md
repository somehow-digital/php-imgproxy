---
title: JpegOptions
description: "Sets JPEG encoder options."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: JpegOptions
  name: jpeg_options
  alias: jpgo
  category: Output
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Sets JPEG encoder options.

**imgproxy:** `jpeg_options` (alias `jpgo`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\JpegOptions;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new JpegOptions(true, false, true));

$url->build();
// _/jpgo:1:0:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `jpgo:1:0:1`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$progressive` | `bool` | — | Write a progressive JPEG. |
| `$noSubsample` | `bool` | — | Disable chroma subsampling. |
| `$trellisQuant` | `bool` | — | Use trellis quantization. |
| `$overshootDeringing` | `bool` | — | Use overshoot deringing. |
| `$optimizeScans` | `bool` | — | Optimize progressive scans. |
| `$quantTable` | `int` | — | Index of the quantization table. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- All arguments are optional.

## See also

- [PngOptions](/api/options/output/png-options/)
- [WebpOptions](/api/options/output/webp-options/)
- [AvifOptions](/api/options/output/avif-options/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#jpeg-options)
