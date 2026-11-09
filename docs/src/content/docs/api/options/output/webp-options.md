---
title: WebpOptions
description: "Sets WebP encoder options."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: WebpOptions
  name: webp_options
  alias: webpo
  category: Output
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Sets WebP encoder options.

**imgproxy:** `webp_options` (alias `webpo`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\WebpOptions;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new WebpOptions('lossless'));

$url->build();
// _/webpo:lossless/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `webpo:lossless`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$compression` | `string` | — | The compression mode. |
| `$smartSubsample` | `bool` | — | Use smart chroma subsampling. |
| `$preset` | `string` | — | The WebP encoder preset. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- All arguments are optional. See the imgproxy reference for the available values.

## See also

- [JpegOptions](/api/options/output/jpeg-options/)
- [PngOptions](/api/options/output/png-options/)
- [AvifOptions](/api/options/output/avif-options/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#webp-options)
