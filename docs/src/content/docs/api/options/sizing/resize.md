---
title: Resize
description: "Sets the resizing type, size, enlarge and extend behavior in a single option."
option:
  class: Resize
  name: resize
  alias: rs
  category: Sizing
  pro: false
---

Sets the resizing type, size, enlarge and extend behavior in a single option. It is a shortcut for `ResizingType`, `Width`, `Height`, `Enlarge` and `Extend`.

**imgproxy:** `resize` (alias `rs`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Enlarge;
use SomehowDigital\ImgProxy\Option\Height;
use SomehowDigital\ImgProxy\Option\Resize;
use SomehowDigital\ImgProxy\Option\ResizingType;
use SomehowDigital\ImgProxy\Option\ResizingTypeEnum;
use SomehowDigital\ImgProxy\Option\Width;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Resize(
        new ResizingType(ResizingTypeEnum::FILL),
        new Width(300),
        new Height(200),
        new Enlarge(),
    ));

$url->build();
// _/rs:fill:300:200:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `rs:fill:300:200:1`.

## Parameters

| Parameter  | Type           | Default | Description                                                             |
| ---------- | -------------- | ------- | ----------------------------------------------------------------------- |
| `$type`    | `ResizingType` | —       | How the image is fitted to the size. imgproxy uses `fit` when left out. |
| `$width`   | `Width`        | —       | Target width.                                                           |
| `$height`  | `Height`       | —       | Target height.                                                          |
| `$enlarge` | `Enlarge`      | —       | Allow enlarging images that are smaller than the target.                |
| `$extend`  | `Extend`       | —       | Extend the image to the target size when it is smaller.                 |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- Skipped arguments are passed as `null`; trailing ones can be left out.

## See also

- [Size](/api/options/sizing/size/)
- [ResizingType](/api/options/sizing/resizing-type/)
- [Width](/api/options/sizing/width/)
- [Height](/api/options/sizing/height/)
- [Enlarge](/api/options/sizing/enlarge/)
- [Extend](/api/options/sizing/extend/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#resize)
