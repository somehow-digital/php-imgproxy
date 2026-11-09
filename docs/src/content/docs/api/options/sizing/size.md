---
title: Size
description: "Sets width, height, enlarge and extend in a single option."
option:
  class: Size
  name: size
  alias: s
  category: Sizing
  pro: false
---

Sets width, height, enlarge and extend in a single option. It is `Resize` without the resizing type.

**imgproxy:** `size` (alias `s`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Height;
use SomehowDigital\ImgProxy\Option\Size;
use SomehowDigital\ImgProxy\Option\Width;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Size(new Width(300), new Height(200)));

$url->build();
// _/s:300:200/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `s:300:200`.

## Parameters

| Parameter  | Type      | Default | Description                                              |
| ---------- | --------- | ------- | -------------------------------------------------------- |
| `$width`   | `Width`   | —       | Target width.                                            |
| `$height`  | `Height`  | —       | Target height.                                           |
| `$enlarge` | `Enlarge` | —       | Allow enlarging images that are smaller than the target. |
| `$extend`  | `Extend`  | —       | Extend the image to the target size when it is smaller.  |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Resize](/api/options/sizing/resize/)
- [Width](/api/options/sizing/width/)
- [Height](/api/options/sizing/height/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#size)
