---
title: CropObjects
description: "Crops the image to the objects detected by imgproxy’s object detection."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: CropObjects
  name: crop_objects
  alias: c_obj
  category: Cropping
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Crops the image to the objects detected by imgproxy’s object detection.

**imgproxy:** `crop_objects` (alias `c_obj`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\CropObjects;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new CropObjects(1.2, 'face'));

$url->build();
// _/c_obj:1.2:face/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `c_obj:1.2:face`.

## Parameters

| Parameter  | Type         | Default  | Description                                                       |
| ---------- | ------------ | -------- | ----------------------------------------------------------------- |
| `$scale`   | `float`      | required | Scale factor of the crop area. `1.2` adds 20% around the objects. |
| `$classes` | `string ...` | —        | Object classes to crop to. All detected objects when omitted.     |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- Takes precedence over `Crop`. The image is not cropped when nothing is detected.
- Introduced in imgproxy 4.0.

## See also

- [Crop](/api/options/cropping/crop/)
- [GravityObject](/api/options/cropping/gravity-object/)
- [BlurDetections](/api/options/effects/blur-detections/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#crop-objects)
