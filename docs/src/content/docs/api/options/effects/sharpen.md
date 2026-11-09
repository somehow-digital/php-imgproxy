---
title: Sharpen
description: "Applies a sharpening filter."
option:
  class: Sharpen
  name: sharpen
  alias: sh
  category: Effects
  pro: false
---

Applies a sharpening filter.

**imgproxy:** `sharpen` (alias `sh`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Sharpen;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Sharpen(0.7));

$url->build();
// _/sh:0.7/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `sh:0.7`.

## Parameters

| Parameter | Type    | Default  | Description                                           |
| --------- | ------- | -------- | ----------------------------------------------------- |
| `$sigma`  | `float` | required | Size of the sharpening mask. `0` disables the filter. |

## See also

- [UnsharpMasking](/api/options/effects/unsharp-masking/)
- [Blur](/api/options/effects/blur/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#sharpen)
