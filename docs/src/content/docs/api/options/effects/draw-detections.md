---
title: DrawDetections
description: "Draws boxes, classes and confidences of detected objects onto the image."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: DrawDetections
  name: draw_detections
  alias: dd
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Draws boxes, classes and confidences of detected objects onto the image. Useful for debugging detection.

**imgproxy:** `draw_detections` (alias `dd`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\DrawDetections;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new DrawDetections(true, 'face'));

$url->build();
// _/dd:1:face/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `dd:1:face`.

## Parameters

| Parameter  | Type         | Default | Description                                                |
| ---------- | ------------ | ------- | ---------------------------------------------------------- |
| `$draw`    | `bool`       | `true`  | `true` to draw.                                            |
| `$classes` | `string ...` | —       | Object classes to draw. All detected objects when omitted. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [BlurDetections](/api/options/effects/blur-detections/)
- [CropObjects](/api/options/cropping/crop-objects/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#draw-detections)
