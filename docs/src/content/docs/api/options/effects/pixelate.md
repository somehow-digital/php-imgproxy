---
title: Pixelate
description: "Applies a pixelation filter."
option:
  class: Pixelate
  name: pixelate
  alias: pix
  category: Effects
  pro: false
---

Applies a pixelation filter.

**imgproxy:** `pixelate` (alias `pix`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Pixelate;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Pixelate(10));

$url->build();
// _/pix:10/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `pix:10`.

## Parameters

| Parameter | Type  | Default  | Description                                     |
| --------- | ----- | -------- | ----------------------------------------------- |
| `$size`   | `int` | required | Size of a pixel block. `0` disables the filter. |

## See also

- [Blur](/api/options/effects/blur/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#pixelate)
