---
title: Duotone
description: "Converts the image to two tones, mapping dark and light areas to two colors."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Duotone
  name: duotone
  alias: dt
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Converts the image to two tones, mapping dark and light areas to two colors.

**imgproxy:** `duotone` (alias `dt`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Duotone;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Duotone(0.8, ['000000', 'ffffff']));

$url->build();
// _/dt:0.8:000000:ffffff/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `dt:0.8:000000:ffffff`.

## Parameters

| Parameter    | Type    | Default  | Description                                               |
| ------------ | ------- | -------- | --------------------------------------------------------- |
| `$intensity` | `float` | required | From 0 to 1.                                              |
| `$colors`    | `array` | —        | Two hexadecimal colors: the dark one, then the light one. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Monochrome](/api/options/effects/monochrome/)
- [Colorize](/api/options/effects/colorize/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#duotone)
