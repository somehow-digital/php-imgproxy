---
title: WatermarkRotate
description: "Rotates the watermark clockwise."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: WatermarkRotate
  name: watermark_rotate
  alias: wmr
  category: Watermark
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Rotates the watermark clockwise.

**imgproxy:** `watermark_rotate` (alias `wmr`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\WatermarkRotate;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new WatermarkRotate(45));

$url->build();
// _/wmr:45/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `wmr:45`.

## Parameters

| Parameter | Type    | Default  | Description       |
| --------- | ------- | -------- | ----------------- |
| `$angle`  | `float` | required | Angle in degrees. |

## See also

- [Watermark](/api/options/watermark/watermark/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#watermark-rotate)
