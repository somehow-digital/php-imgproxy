---
title: Padding
description: "Adds padding around the image, after all other transformations."
option:
  class: Padding
  name: padding
  alias: pd
  category: Sizing
  pro: false
---

Adds padding around the image, after all other transformations. The area is filled with the background color.

**imgproxy:** `padding` (alias `pd`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Padding;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Padding(10, 20));

$url->build();
// _/pd:10:20/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `pd:10:20`.

## Parameters

| Parameter | Type  | Default  | Description                                        |
| --------- | ----- | -------- | -------------------------------------------------- |
| `$top`    | `int` | required | Top padding in pixels.                             |
| `$right`  | `int` | —        | Right padding. Takes the top value when left out.  |
| `$bottom` | `int` | —        | Bottom padding. Takes the top value when left out. |
| `$left`   | `int` | —        | Left padding. Takes the right value when left out. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- Follows the CSS shorthand: one value for all sides, two for vertical and horizontal, and so on.
- Paddings are scaled by `Dpr`.

## See also

- [Background](/api/options/effects/background/)
- [Dpr](/api/options/sizing/dpr/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#padding)
