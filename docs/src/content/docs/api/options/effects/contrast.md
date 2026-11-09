---
title: Contrast
description: "Adjusts the contrast of the image."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Contrast
  name: contrast
  alias: co
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Adjusts the contrast of the image.

**imgproxy:** `contrast` (alias `co`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Contrast;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Contrast(1.2));

$url->build();
// _/co:1.2/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `co:1.2`.

## Parameters

| Parameter   | Type    | Default  | Description                                        |
| ----------- | ------- | -------- | -------------------------------------------------- |
| `$contrast` | `float` | required | A positive factor. `1` leaves the image unchanged. |

## See also

- [Adjust](/api/options/effects/adjust/)
- [Brightness](/api/options/effects/brightness/)
- [Saturation](/api/options/effects/saturation/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#contrast)
