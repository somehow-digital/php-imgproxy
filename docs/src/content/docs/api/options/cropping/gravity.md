---
title: Gravity
description: "Sets the anchor for cropping and extending."
sidebar:
  badge:
    text: Partly Pro
    variant: note
option:
  class: Gravity
  name: gravity
  alias: g
  category: Cropping
  pro: partial
---

:::note[Partly imgproxy Pro]
The `obj` and `objw` gravity types require imgproxy Pro. Use `GravityObject` and `GravityObjectWeight` for them.
:::

Sets the anchor for cropping and extending. Offsets of 1 or more are absolute pixels, offsets below 1 are relative.

**imgproxy:** `gravity` (alias `g`) · **Availability:** all editions; the `obj` and `objw` types need Pro

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Gravity(GravityEnum::NORTH_EAST, 10, 20));

$url->build();
// _/g:noea:10:20/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `g:noea:10:20`.

## Parameters

| Parameter     | Type                  | Default  | Description                                                                                                |
| ------------- | --------------------- | -------- | ---------------------------------------------------------------------------------------------------------- |
| `$gravity`    | `GravityEnum\|string` | required | A `GravityEnum` case or its value, such as `no`, `ea`, `so`, `we`, `noea`, `nowe`, `soea`, `sowe` or `ce`. |
| `$horizontal` | `float`               | —        | Horizontal offset.                                                                                         |
| `$vertical`   | `float`               | —        | Vertical offset.                                                                                           |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- For smart, focus point and object gravity, prefer the dedicated classes `GravitySmart`, `GravityFocusPoint`, `GravityObject` and `GravityObjectWeight`.

## See also

- [GravitySmart](/api/options/cropping/gravity-smart/)
- [GravityFocusPoint](/api/options/cropping/gravity-focus-point/)
- [GravityObject](/api/options/cropping/gravity-object/)
- [GravityObjectWeight](/api/options/cropping/gravity-object-weight/)
- [Crop](/api/options/cropping/crop/)
- [Extend](/api/options/sizing/extend/)
- [Enums](/api/enums/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#gravity)
