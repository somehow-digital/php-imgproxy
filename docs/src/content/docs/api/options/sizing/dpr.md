---
title: Dpr
description: "Multiplies the resulting dimensions by a device pixel ratio, for HiDPI screens."
option:
  class: Dpr
  name: dpr
  category: Sizing
  pro: false
---

Multiplies the resulting dimensions by a device pixel ratio, for HiDPI screens.

**imgproxy:** `dpr` · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Dpr;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Dpr(2));

$url->build();
// _/dpr:2/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `dpr:2`.

## Parameters

| Parameter | Type    | Default  | Description                                                        |
| --------- | ------- | -------- | ------------------------------------------------------------------ |
| `$ratio`  | `float` | required | Device pixel ratio, greater than 0. `1` leaves the size unchanged. |

## Notes

- Gravity offsets, watermark offsets and paddings are scaled as well.

## See also

- [Zoom](/api/options/sizing/zoom/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#dpr)
