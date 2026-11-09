---
title: GravitySmart
description: "Gravity on the most interesting part of the image, as detected by imgproxy."
option:
  class: GravitySmart
  name: gravity
  alias: g
  category: Cropping
  pro: false
---

Gravity on the most interesting part of the image, as detected by imgproxy.

**imgproxy:** `gravity` (alias `g`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\GravitySmart;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new GravitySmart());

$url->build();
// _/g:sm/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `g:sm`.

This option takes no parameters.

## Notes

- Not allowed for `Extend` and `ExtendAspectRatio`.

## See also

- [Gravity](/api/options/cropping/gravity/)
- [Crop](/api/options/cropping/crop/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#gravity)
