---
title: Zoom
description: "Multiplies the resulting dimensions."
option:
  class: Zoom
  name: zoom
  alias: z
  category: Sizing
  pro: false
---

Multiplies the resulting dimensions.

**imgproxy:** `zoom` (alias `z`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Zoom;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Zoom(2));

$url->build();
// _/z:2/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `z:2`.

## Parameters

| Parameter     | Type    | Default  | Description                                                          |
| ------------- | ------- | -------- | -------------------------------------------------------------------- |
| `$horizontal` | `float` | required | Horizontal factor, greater than 0.                                   |
| `$vertical`   | `float` | —        | Vertical factor. Omit it to use the horizontal factor for both axes. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- Zoom does not scale gravity offsets, watermark offsets or paddings. `Dpr` does.

## See also

- [Dpr](/api/options/sizing/dpr/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#zoom)
