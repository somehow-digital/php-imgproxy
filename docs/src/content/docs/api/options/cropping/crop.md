---
title: Crop
description: "Crops the image to a size before it is resized."
option:
  class: Crop
  name: crop
  alias: c
  category: Cropping
  pro: false
---

Crops the image to a size before it is resized.

**imgproxy:** `crop` (alias `c`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Crop;
use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Crop(500, 500, new Gravity(GravityEnum::NORTH_EAST)));

$url->build();
// _/c:500:500:noea/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `c:500:500:noea`.

## Parameters

| Parameter  | Type      | Default  | Description                                                                                                                   |
| ---------- | --------- | -------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$width`   | `float`   | required | Crop width. Values of 1 or more are absolute pixels, values below 1 are relative to the source, and `0` keeps the full width. |
| `$height`  | `float`   | required | Crop height, with the same rules as the width.                                                                                |
| `$gravity` | `Gravity` | —        | Where the crop is anchored. imgproxy uses the `Gravity` option when left out.                                                 |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- Cropping happens before resizing.

## See also

- [Gravity](/api/options/cropping/gravity/)
- [CropAspectRatio](/api/options/cropping/crop-aspect-ratio/)
- [CropObjects](/api/options/cropping/crop-objects/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#crop)
