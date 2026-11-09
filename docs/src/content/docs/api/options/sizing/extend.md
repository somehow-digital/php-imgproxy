---
title: Extend
description: "Extends the image to the requested size when it is smaller, filling the new area with the background color."
option:
  class: Extend
  name: extend
  alias: ex
  category: Sizing
  pro: false
---

Extends the image to the requested size when it is smaller, filling the new area with the background color.

**imgproxy:** `extend` (alias `ex`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Extend;
use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Extend(true, new Gravity(GravityEnum::CENTER)));

$url->build();
// _/ex:1:ce/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `ex:1:ce`.

## Parameters

| Parameter  | Type      | Default | Description                                                                          |
| ---------- | --------- | ------- | ------------------------------------------------------------------------------------ |
| `$extend`  | `bool`    | `true`  | `true` to extend.                                                                    |
| `$gravity` | `Gravity` | —       | Where the image is placed on the extended canvas. imgproxy centers it when left out. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- A smart or object gravity is rejected with an `InvalidArgumentException`, because imgproxy does not support them here.

## See also

- [ExtendAspectRatio](/api/options/sizing/extend-aspect-ratio/)
- [Background](/api/options/effects/background/)
- [Resize](/api/options/sizing/resize/)
- [Gravity](/api/options/cropping/gravity/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#extend)
