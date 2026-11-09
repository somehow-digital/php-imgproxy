---
title: Watermark
description: "Places the watermark that is configured in imgproxy on the image."
sidebar:
  badge:
    text: Partly Pro
    variant: note
option:
  class: Watermark
  name: watermark
  alias: wm
  category: Watermark
  pro: partial
---

:::note[Partly imgproxy Pro]
The `ch` (chessboard) position requires imgproxy Pro. The watermark image itself is configured on the server, or with `WatermarkUrl` in Pro.
:::

Places the watermark that is configured in imgproxy on the image.

**imgproxy:** `watermark` (alias `wm`) · **Availability:** all editions; the `ch` position needs Pro

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Watermark;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Watermark(0.5, 'soea', 10, 10, 0.2));

$url->build();
// _/wm:0.5:soea:10:10:0.2/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `wm:0.5:soea:10:10:0.2`.

## Parameters

| Parameter     | Type                                  | Default  | Description                                                                                                                           |
| ------------- | ------------------------------------- | -------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$opacity`    | `float`                               | required | Opacity of the watermark, from 0 to 1.                                                                                                |
| `$position`   | `WatermarkPositionEnum\|string\|null` | —        | A `WatermarkPositionEnum` case or its value: a compass position, `re` (tiled) or `ch` (chessboard). imgproxy uses `ce` when left out. |
| `$horizontal` | `float`                               | —        | Horizontal offset. For `re` and `ch`, the horizontal spacing of the tiles.                                                            |
| `$vertical`   | `float`                               | —        | Vertical offset. For `re` and `ch`, the vertical spacing of the tiles.                                                                |
| `$scale`      | `float`                               | —        | Size of the watermark relative to the resulting image. `0` keeps its size.                                                            |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [WatermarkUrl](/api/options/watermark/watermark-url/)
- [WatermarkText](/api/options/watermark/watermark-text/)
- [WatermarkSize](/api/options/watermark/watermark-size/)
- [WatermarkRotate](/api/options/watermark/watermark-rotate/)
- [WatermarkShadow](/api/options/watermark/watermark-shadow/)
- [Enums](/api/enums/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#watermark)
