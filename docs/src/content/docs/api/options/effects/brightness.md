---
title: Brightness
description: "Adjusts the brightness of the image."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Brightness
  name: brightness
  alias: br
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Adjusts the brightness of the image.

**imgproxy:** `brightness` (alias `br`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Brightness;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Brightness(20));

$url->build();
// _/br:20/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `br:20`.

## Parameters

| Parameter     | Type  | Default  | Description                                                  |
| ------------- | ----- | -------- | ------------------------------------------------------------ |
| `$brightness` | `int` | required | An integer from -255 to 255. `0` leaves the image unchanged. |

## Notes

- Values outside the range throw an `InvalidArgumentException`.

## See also

- [Adjust](/api/options/effects/adjust/)
- [Contrast](/api/options/effects/contrast/)
- [Saturation](/api/options/effects/saturation/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#brightness)
