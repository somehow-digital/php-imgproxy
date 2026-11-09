---
title: UnsharpMasking
description: "Applies unsharp masking."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: UnsharpMasking
  name: unsharp_masking
  alias: ush
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Applies unsharp masking. It overrides the imgproxy configuration.

**imgproxy:** `unsharp_masking` (alias `ush`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\UnsharpMasking;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new UnsharpMasking('auto'));

$url->build();
// _/ush:auto/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `ush:auto`.

## Parameters

| Parameter  | Type     | Default | Description                       |
| ---------- | -------- | ------- | --------------------------------- |
| `$mode`    | `string` | —       | The masking mode, such as `auto`. |
| `$weight`  | `float`  | —       | Weight of the mask.               |
| `$divider` | `float`  | —       | Divider of the mask.              |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- All arguments are optional. See the imgproxy reference for the available modes.

## See also

- [Sharpen](/api/options/effects/sharpen/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#unsharp-masking)
