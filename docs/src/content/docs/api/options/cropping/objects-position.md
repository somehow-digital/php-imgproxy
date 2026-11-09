---
title: ObjectsPosition
description: "Positions the detected objects within the resulting image."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: ObjectsPosition
  name: objects_position
  alias: op
  category: Cropping
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Positions the detected objects within the resulting image. Use it together with the object gravities.

**imgproxy:** `objects_position` (alias `op`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\ObjectsPosition;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new ObjectsPosition('fp', 0.5, 0.5));

$url->build();
// _/op:fp:0.5:0.5/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `op:fp:0.5:0.5`.

## Parameters

| Parameter     | Type                              | Default  | Description                                                                                                                       |
| ------------- | --------------------------------- | -------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$type`       | `ObjectsPositionTypeEnum\|string` | required | An `ObjectsPositionTypeEnum` case or its value: a compass position, `fp` (focus point) or `prop` (keep the original proportions). |
| `$horizontal` | `float`                           | —        | Horizontal offset, or the focus point x.                                                                                          |
| `$vertical`   | `float`                           | —        | Vertical offset, or the focus point y.                                                                                            |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [GravityObject](/api/options/cropping/gravity-object/)
- [GravityObjectWeight](/api/options/cropping/gravity-object-weight/)
- [Enums](/api/enums/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#objects-position)
