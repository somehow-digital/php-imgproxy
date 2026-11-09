---
title: Rotate
description: "Rotates the image clockwise by a multiple of 90 degrees."
option:
  class: Rotate
  name: rotate
  alias: rot
  category: Sizing
  pro: false
---

Rotates the image clockwise by a multiple of 90 degrees.

**imgproxy:** `rotate` (alias `rot`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Rotate;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Rotate(90));

$url->build();
// _/rot:90/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `rot:90`.

## Parameters

| Parameter | Type  | Default  | Description                                                          |
| --------- | ----- | -------- | -------------------------------------------------------------------- |
| `$angle`  | `int` | required | `0`, `90`, `180` or `270`, or any other non-negative multiple of 90. |

## Notes

- Negative angles and values that are not a multiple of 90 throw an `InvalidArgumentException`.
- The rotation is applied after the EXIF orientation, unless `AutoRotate` is disabled.

## See also

- [AutoRotate](/api/options/sizing/auto-rotate/)
- [Flip](/api/options/sizing/flip/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#rotate)
