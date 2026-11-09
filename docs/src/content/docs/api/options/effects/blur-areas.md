---
title: BlurAreas
description: "Blurs rectangular areas of the image."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: BlurAreas
  name: blur_areas
  alias: ba
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Blurs rectangular areas of the image.

**imgproxy:** `blur_areas` (alias `ba`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\BlurAreas;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new BlurAreas(
        10,
        [0.1, 0.1, 0.3, 0.2],
        [0.6, 0.5, 0.2, 0.2],
    ));

$url->build();
// _/ba:10:0.1:0.1:0.3:0.2:0.6:0.5:0.2:0.2/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `ba:10:0.1:0.1:0.3:0.2:0.6:0.5:0.2:0.2`.

## Parameters

| Parameter | Type        | Default  | Description                                                                                                              |
| --------- | ----------- | -------- | ------------------------------------------------------------------------------------------------------------------------ |
| `$sigma`  | `float`     | required | Size of the blur mask, greater than 0.                                                                                   |
| `$areas`  | `array ...` | —        | Any number of areas, each an array of `left`, `top`, `width` and `height`, as values from 0 to 1 relative to the source. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- An area that does not consist of exactly four values throws an `InvalidArgumentException`.
- Coordinates respect the EXIF orientation of the source.

## See also

- [Blur](/api/options/effects/blur/)
- [BlurDetections](/api/options/effects/blur-detections/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#blur-areas)
