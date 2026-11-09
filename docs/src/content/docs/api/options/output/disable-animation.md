---
title: DisableAnimation
description: "Treats animated images as static, using the first frame."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: DisableAnimation
  name: disable_animation
  alias: da
  category: Output
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Treats animated images as static, using the first frame.

**imgproxy:** `disable_animation` (alias `da`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\DisableAnimation;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new DisableAnimation());

$url->build();
// _/da:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `da:1`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$disable` | `bool` | `true` | `false` to keep animations. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

[imgproxy reference](https://docs.imgproxy.net/usage/processing#disable-animation)
