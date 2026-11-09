---
title: Gradient
description: "Overlays a gradient that fades from transparent to a color."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Gradient
  name: gradient
  alias: gr
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Overlays a gradient that fades from transparent to a color.

**imgproxy:** `gradient` (alias `gr`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Gradient;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Gradient(0.6, '000000', 'down', 0.2, 1));

$url->build();
// _/gr:0.6:000000:down:0.2:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `gr:0.6:000000:down:0.2:1`.

## Parameters

| Parameter    | Type                  | Default  | Description                                                                                  |
| ------------ | --------------------- | -------- | -------------------------------------------------------------------------------------------- |
| `$opacity`   | `float`               | required | Opacity of the gradient. `0` disables it.                                                    |
| `$color`     | `string`              | —        | Hexadecimal color. imgproxy uses `000` when left out.                                        |
| `$direction` | `string\|float\|null` | —        | An angle in degrees, or `down`, `up`, `right` or `left`. imgproxy uses `down` when left out. |
| `$start`     | `float`               | —        | Where the gradient starts, from 0 to 1. imgproxy uses `0` when left out.                     |
| `$stop`      | `float`               | —        | Where the gradient ends, from 0 to 1. imgproxy uses `1` when left out.                       |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Colorize](/api/options/effects/colorize/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#gradient)
