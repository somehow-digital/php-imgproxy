---
title: Colorize
description: "Overlays a color on the image."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Colorize
  name: colorize
  alias: col
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Overlays a color on the image.

**imgproxy:** `colorize` (alias `col`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Colorize;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Colorize(0.5, 'ff0000'));

$url->build();
// _/col:0.5:ff0000/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `col:0.5:ff0000`.

## Parameters

| Parameter    | Type     | Default  | Description                                           |
| ------------ | -------- | -------- | ----------------------------------------------------- |
| `$opacity`   | `float`  | required | Opacity of the overlay. `0` disables it.              |
| `$color`     | `string` | —        | Hexadecimal color. imgproxy uses `000` when left out. |
| `$keepAlpha` | `bool`   | —        | Keep the alpha channel of the image.                  |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Monochrome](/api/options/effects/monochrome/)
- [Gradient](/api/options/effects/gradient/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#colorize)
