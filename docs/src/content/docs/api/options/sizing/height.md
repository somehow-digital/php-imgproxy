---
title: Height
description: "Sets the height of the resulting image."
option:
  class: Height
  name: height
  alias: h
  category: Sizing
  pro: false
---

Sets the height of the resulting image.

**imgproxy:** `height` (alias `h`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Height;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Height(200));

$url->build();
// _/h:200/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `h:200`.

## Parameters

| Parameter | Type  | Default  | Description                                                                   |
| --------- | ----- | -------- | ----------------------------------------------------------------------------- |
| `$height` | `int` | required | Height in pixels. `0` derives the height from the width and the aspect ratio. |

## Notes

- With the `force` resizing type, `0` keeps the original height.

## See also

- [Width](/api/options/sizing/width/)
- [Size](/api/options/sizing/size/)
- [Resize](/api/options/sizing/resize/)
- [MinHeight](/api/options/sizing/min-height/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#height)
