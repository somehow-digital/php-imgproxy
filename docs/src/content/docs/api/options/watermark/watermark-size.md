---
title: WatermarkSize
description: "Sets the size of the watermark."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: WatermarkSize
  name: watermark_size
  alias: wms
  category: Watermark
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Sets the size of the watermark.

**imgproxy:** `watermark_size` (alias `wms`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\WatermarkSize;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new WatermarkSize(100, 50));

$url->build();
// _/wms:100:50/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `wms:100:50`.

## Parameters

| Parameter | Type  | Default  | Description              |
| --------- | ----- | -------- | ------------------------ |
| `$width`  | `int` | required | Width of the watermark.  |
| `$height` | `int` | required | Height of the watermark. |

## Notes

- Only applies when the watermark scale is `0`.

## See also

- [Watermark](/api/options/watermark/watermark/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#watermark-size)
