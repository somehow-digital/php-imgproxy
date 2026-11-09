---
title: ExtendAspectRatio
description: "Extends the image to the requested aspect ratio, filling the new area with the background color."
option:
  class: ExtendAspectRatio
  name: extend_aspect_ratio
  alias: exar
  category: Sizing
  pro: false
---

Extends the image to the requested aspect ratio, filling the new area with the background color.

**imgproxy:** `extend_aspect_ratio` (alias `exar`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\ExtendAspectRatio;
use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new ExtendAspectRatio(
        true,
        new Gravity(GravityEnum::NORTH),
    ));

$url->build();
// _/exar:1:no/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `exar:1:no`.

## Parameters

| Parameter  | Type      | Default | Description                                                                          |
| ---------- | --------- | ------- | ------------------------------------------------------------------------------------ |
| `$extend`  | `bool`    | `true`  | `true` to extend.                                                                    |
| `$gravity` | `Gravity` | —       | Where the image is placed on the extended canvas. imgproxy centers it when left out. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- A smart or object gravity is rejected with an `InvalidArgumentException`.

## See also

- [Extend](/api/options/sizing/extend/)
- [Background](/api/options/effects/background/)
- [Gravity](/api/options/cropping/gravity/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#extend-aspect-ratio)
