---
title: Adjust
description: "Sets brightness, contrast and saturation in one option."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Adjust
  name: adjust
  alias: a
  category: Effects
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Sets brightness, contrast and saturation in one option.

**imgproxy:** `adjust` (alias `a`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Adjust;
use SomehowDigital\ImgProxy\Option\Brightness;
use SomehowDigital\ImgProxy\Option\Contrast;
use SomehowDigital\ImgProxy\Option\Saturation;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Adjust(
        new Brightness(10),
        new Contrast(1.2),
        new Saturation(1.1),
    ));

$url->build();
// _/a:10:1.2:1.1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `a:10:1.2:1.1`.

## Parameters

| Parameter     | Type         | Default | Description            |
| ------------- | ------------ | ------- | ---------------------- |
| `$brightness` | `Brightness` | —       | A `Brightness` option. |
| `$contrast`   | `Contrast`   | —       | A `Contrast` option.   |
| `$saturation` | `Saturation` | —       | A `Saturation` option. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Brightness](/api/options/effects/brightness/)
- [Contrast](/api/options/effects/contrast/)
- [Saturation](/api/options/effects/saturation/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#adjust)
