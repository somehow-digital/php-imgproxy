---
title: ResizingType
description: "Defines how the image is fitted to the requested size."
option:
  class: ResizingType
  name: resizing_type
  alias: rt
  category: Sizing
  pro: false
---

Defines how the image is fitted to the requested size.

**imgproxy:** `resizing_type` (alias `rt`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\ResizingType;
use SomehowDigital\ImgProxy\Option\ResizingTypeEnum;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new ResizingType(ResizingTypeEnum::FILL));

$url->build();
// _/rt:fill/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `rt:fill`.

## Parameters

| Parameter | Type               | Default  | Description                                                                                                                                         |
| --------- | ------------------ | -------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$type`   | `ResizingTypeEnum` | required | A `ResizingTypeEnum` case: `fit` (imgproxy’s default), `fill`, `fill-down`, `force` or `auto`. Unlike most options, a plain string is not accepted. |

## Notes

- `fit` resizes the image to fit within the size and keeps the aspect ratio.
- `fill` fills the whole size and crops what overflows.
- `fill-down` is like `fill`, but never enlarges the image.
- `force` ignores the aspect ratio.
- `auto` picks `fit` or `fill` depending on the orientation of source and target.

## See also

- [Resize](/api/options/sizing/resize/)
- [Gravity](/api/options/cropping/gravity/)
- [Enums](/api/enums/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#resizing-type)
