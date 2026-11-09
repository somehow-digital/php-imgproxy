---
title: Blur
description: "Applies a gaussian blur."
option:
  class: Blur
  name: blur
  alias: bl
  category: Effects
  pro: false
---

Applies a gaussian blur.

**imgproxy:** `blur` (alias `bl`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Blur;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Blur(5));

$url->build();
// _/bl:5/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `bl:5`.

## Parameters

| Parameter | Type    | Default  | Description                                   |
| --------- | ------- | -------- | --------------------------------------------- |
| `$sigma`  | `float` | required | Size of the blur mask. `0` disables the blur. |

## See also

- [BlurAreas](/api/options/effects/blur-areas/)
- [BlurDetections](/api/options/effects/blur-detections/)
- [Sharpen](/api/options/effects/sharpen/)
- [Pixelate](/api/options/effects/pixelate/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#blur)
