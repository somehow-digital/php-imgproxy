---
title: WatermarkShadow
description: "Adds a shadow to the watermark."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: WatermarkShadow
  name: watermark_shadow
  alias: wmsh
  category: Watermark
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Adds a shadow to the watermark.

**imgproxy:** `watermark_shadow` (alias `wmsh`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\WatermarkShadow;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new WatermarkShadow(3));

$url->build();
// _/wmsh:3/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `wmsh:3`.

## Parameters

| Parameter | Type    | Default  | Description                                              |
| --------- | ------- | -------- | -------------------------------------------------------- |
| `$sigma`  | `float` | required | Size of the shadow’s blur mask. `0` disables the shadow. |

## See also

- [Watermark](/api/options/watermark/watermark/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#watermark-shadow)
