---
title: GravityFocusPoint
description: "Gravity on a focus point given in relative coordinates."
option:
  class: GravityFocusPoint
  name: gravity
  alias: g
  category: Cropping
  pro: false
---

Gravity on a focus point given in relative coordinates.

**imgproxy:** `gravity` (alias `g`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\GravityFocusPoint;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new GravityFocusPoint(0.25, 0.75));

$url->build();
// _/g:fp:0.25:0.75/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `g:fp:0.25:0.75`.

## Parameters

| Parameter     | Type    | Default  | Description                                     |
| ------------- | ------- | -------- | ----------------------------------------------- |
| `$horizontal` | `float` | required | Horizontal position from 0 (left) to 1 (right). |
| `$vertical`   | `float` | required | Vertical position from 0 (top) to 1 (bottom).   |

## See also

- [Gravity](/api/options/cropping/gravity/)
- [Crop](/api/options/cropping/crop/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#gravity)
