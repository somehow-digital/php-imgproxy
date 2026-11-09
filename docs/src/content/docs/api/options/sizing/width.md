---
title: Width
description: "Sets the width of the resulting image."
option:
  class: Width
  name: width
  alias: w
  category: Sizing
  pro: false
---

Sets the width of the resulting image.

**imgproxy:** `width` (alias `w`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Width;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Width(300));

$url->build();
// _/w:300/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `w:300`.

## Parameters

| Parameter | Type  | Default  | Description                                                                  |
| --------- | ----- | -------- | ---------------------------------------------------------------------------- |
| `$width`  | `int` | required | Width in pixels. `0` derives the width from the height and the aspect ratio. |

## Notes

- With the `force` resizing type, `0` keeps the original width.

## See also

- [Height](/api/options/sizing/height/)
- [Size](/api/options/sizing/size/)
- [Resize](/api/options/sizing/resize/)
- [MinWidth](/api/options/sizing/min-width/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#width)
