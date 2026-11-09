---
title: Trim
description: "Removes the surrounding background from the image."
option:
  class: Trim
  name: trim
  alias: t
  category: Sizing
  pro: false
---

Removes the surrounding background from the image.

**imgproxy:** `trim` (alias `t`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Trim;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Trim(10, 'ffffff'));

$url->build();
// _/t:10:ffffff/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `t:10:ffffff`.

## Parameters

| Parameter     | Type     | Default  | Description                                                         |
| ------------- | -------- | -------- | ------------------------------------------------------------------- |
| `$threshold`  | `float`  | required | Color tolerance. Higher values trim more.                           |
| `$color`      | `string` | —        | Hexadecimal background color. Detected from the image when omitted. |
| `$horizontal` | `bool`   | —        | Trim equal amounts from left and right.                             |
| `$vertical`   | `bool`   | —        | Trim equal amounts from top and bottom.                             |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- Trimming disables scale-on-load and does not support animated images.

[imgproxy reference](https://docs.imgproxy.net/usage/processing#trim)
