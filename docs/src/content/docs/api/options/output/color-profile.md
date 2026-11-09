---
title: ColorProfile
description: "Converts the image to a color profile and embeds it."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: ColorProfile
  name: color_profile
  alias: cp
  category: Output
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Converts the image to a color profile and embeds it.

**imgproxy:** `color_profile` (alias `cp`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\ColorProfile;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new ColorProfile('cmyk'));

$url->build();
// _/cp:cmyk/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `cp:cmyk`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$profile` | `string` | required | `srgb`, `cmyk`, or the file name of a custom profile in imgproxy’s color profiles directory. |

## See also

- [StripColorProfile](/api/options/output/strip-color-profile/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#color-profile)
