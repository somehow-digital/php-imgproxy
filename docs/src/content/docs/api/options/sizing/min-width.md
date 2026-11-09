---
title: MinWidth
description: "Sets the minimum width of the resulting image."
option:
  class: MinWidth
  name: min-width
  alias: mw
  category: Sizing
  pro: false
---

Sets the minimum width of the resulting image.

**imgproxy:** `min-width` (alias `mw`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\MinWidth;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new MinWidth(200));

$url->build();
// _/mw:200/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `mw:200`.

## Parameters

| Parameter | Type  | Default  | Description                                      |
| --------- | ----- | -------- | ------------------------------------------------ |
| `$width`  | `int` | required | Minimum width in pixels. `0` disables the limit. |

## See also

- [MinHeight](/api/options/sizing/min-height/)
- [Width](/api/options/sizing/width/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#min-width)
