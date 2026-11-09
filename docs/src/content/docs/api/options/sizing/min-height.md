---
title: MinHeight
description: "Sets the minimum height of the resulting image."
option:
  class: MinHeight
  name: min-height
  alias: mh
  category: Sizing
  pro: false
---

Sets the minimum height of the resulting image.

**imgproxy:** `min-height` (alias `mh`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\MinHeight;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new MinHeight(200));

$url->build();
// _/mh:200/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `mh:200`.

## Parameters

| Parameter | Type  | Default  | Description                                       |
| --------- | ----- | -------- | ------------------------------------------------- |
| `$height` | `int` | required | Minimum height in pixels. `0` disables the limit. |

## See also

- [MinWidth](/api/options/sizing/min-width/)
- [Height](/api/options/sizing/height/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#min-height)
