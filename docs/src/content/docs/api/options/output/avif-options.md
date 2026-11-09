---
title: AvifOptions
description: "Sets AVIF encoder options."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: AvifOptions
  name: avif_options
  alias: avifo
  category: Output
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Sets AVIF encoder options.

**imgproxy:** `avif_options` (alias `avifo`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\AvifOptions;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new AvifOptions('on'));

$url->build();
// _/avifo:on/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `avifo:on`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$subsample` | `string` | — | The chroma subsampling mode. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- See the imgproxy reference for the available values.

## See also

- [JpegOptions](/api/options/output/jpeg-options/)
- [PngOptions](/api/options/output/png-options/)
- [WebpOptions](/api/options/output/webp-options/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#avif-options)
