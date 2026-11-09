---
title: BackgroundAlpha
description: "Adds an alpha channel to the background color."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: BackgroundAlpha
  name: background_alpha
  alias: bga
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Adds an alpha channel to the background color.

**imgproxy:** `background_alpha` (alias `bga`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\BackgroundAlpha;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new BackgroundAlpha(0.5));

$url->build();
// _/bga:0.5/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `bga:0.5`.

## Parameters

| Parameter | Type    | Default  | Description                                                          |
| --------- | ------- | -------- | -------------------------------------------------------------------- |
| `$alpha`  | `float` | required | From 0 (transparent) to 1 (opaque). imgproxy uses `1` when left out. |

## See also

- [Background](/api/options/effects/background/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#background-alpha)
