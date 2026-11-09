---
title: Monochrome
description: "Converts the image to monochrome."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Monochrome
  name: monochrome
  alias: mc
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Converts the image to monochrome.

**imgproxy:** `monochrome` (alias `mc`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Monochrome;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Monochrome(1, 'b3b3b3'));

$url->build();
// _/mc:1:b3b3b3/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `mc:1:b3b3b3`.

## Parameters

| Parameter    | Type     | Default  | Description                                                                     |
| ------------ | -------- | -------- | ------------------------------------------------------------------------------- |
| `$intensity` | `float`  | required | From 0 to 1.                                                                    |
| `$color`     | `string` | —        | Hexadecimal color of the monochrome tone. imgproxy uses `b3b3b3` when left out. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Duotone](/api/options/effects/duotone/)
- [Colorize](/api/options/effects/colorize/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#monochrome)
