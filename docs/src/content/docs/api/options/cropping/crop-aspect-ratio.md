---
title: CropAspectRatio
description: "Adjusts the crop area to an aspect ratio."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: CropAspectRatio
  name: crop_aspect_ratio
  alias: car
  category: Cropping
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Adjusts the crop area to an aspect ratio. It corrects the size of the crop, not its gravity.

**imgproxy:** `crop_aspect_ratio` (alias `car`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\CropAspectRatio;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new CropAspectRatio(1.5, true));

$url->build();
// _/car:1.5:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `car:1.5:1`.

## Parameters

| Parameter  | Type    | Default  | Description                                                           |
| ---------- | ------- | -------- | --------------------------------------------------------------------- |
| `$ratio`   | `float` | required | Aspect ratio as width divided by height. `0` disables the correction. |
| `$enlarge` | `bool`  | —        | Enlarge the crop area to reach the ratio instead of shrinking it.     |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Crop](/api/options/cropping/crop/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#crop-aspect-ratio)
