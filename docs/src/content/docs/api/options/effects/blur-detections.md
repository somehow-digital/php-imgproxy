---
title: BlurDetections
description: "Blurs the objects found by imgproxy’s object detection."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: BlurDetections
  name: blur_detections
  alias: bd
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Blurs the objects found by imgproxy’s object detection.

**imgproxy:** `blur_detections` (alias `bd`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\BlurDetections;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new BlurDetections(10, 'face'));

$url->build();
// _/bd:10:face/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `bd:10:face`.

## Parameters

| Parameter  | Type         | Default  | Description                                                |
| ---------- | ------------ | -------- | ---------------------------------------------------------- |
| `$sigma`   | `float`      | required | Size of the blur mask.                                     |
| `$classes` | `string ...` | —        | Object classes to blur. All detected objects when omitted. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Blur](/api/options/effects/blur/)
- [BlurAreas](/api/options/effects/blur-areas/)
- [DrawDetections](/api/options/effects/draw-detections/)
- [CropObjects](/api/options/cropping/crop-objects/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#blur-detections)
