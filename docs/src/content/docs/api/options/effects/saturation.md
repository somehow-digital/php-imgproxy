---
title: Saturation
description: "Adjusts the saturation of the image."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Saturation
  name: saturation
  alias: sa
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Adjusts the saturation of the image.

**imgproxy:** `saturation` (alias `sa`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Saturation;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Saturation(1.3));

$url->build();
// _/sa:1.3/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `sa:1.3`.

## Parameters

| Parameter     | Type    | Default  | Description                                        |
| ------------- | ------- | -------- | -------------------------------------------------- |
| `$saturation` | `float` | required | A positive factor. `1` leaves the image unchanged. |

## See also

- [Adjust](/api/options/effects/adjust/)
- [Brightness](/api/options/effects/brightness/)
- [Contrast](/api/options/effects/contrast/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#saturation)
