---
title: Dpi
description: "Replaces the DPI metadata of the image."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Dpi
  name: dpi
  category: Output
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Replaces the DPI metadata of the image.

**imgproxy:** `dpi` · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Dpi;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Dpi(300));

$url->build();
// _/dpi:300/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `dpi:300`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$dpi` | `int` | required | DPI value. `0` leaves the metadata unchanged, or resets it when metadata is stripped. |

## See also

- [StripMetadata](/api/options/output/strip-metadata/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#dpi)
