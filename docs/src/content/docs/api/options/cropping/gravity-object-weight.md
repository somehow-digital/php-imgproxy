---
title: GravityObjectWeight
description: "Gravity on detected objects, with a weight for each class."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: GravityObjectWeight
  name: gravity
  alias: g
  category: Cropping
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Gravity on detected objects, with a weight for each class.

**imgproxy:** `gravity` (alias `g`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\GravityObjectWeight;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new GravityObjectWeight(['face', 2], ['person', 1]));

$url->build();
// _/g:objw:face:2:person:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `g:objw:face:2:person:1`.

## Parameters

| Parameter | Type        | Default | Description                                                                 |
| --------- | ----------- | ------- | --------------------------------------------------------------------------- |
| `$values` | `array ...` | —       | Pairs of a class name and a weight. The weight defaults to `1` in imgproxy. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- Not allowed for `Extend` and `ExtendAspectRatio`.

## See also

- [GravityObject](/api/options/cropping/gravity-object/)
- [Gravity](/api/options/cropping/gravity/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#gravity)
