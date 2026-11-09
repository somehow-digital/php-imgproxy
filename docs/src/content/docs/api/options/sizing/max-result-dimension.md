---
title: MaxResultDimension
description: "Limits the larger dimension of the resulting image."
option:
  class: MaxResultDimension
  name: max_result_dimension
  alias: mrd
  category: Sizing
  pro: false
---

Limits the larger dimension of the resulting image. It overrides the imgproxy configuration.

**imgproxy:** `max_result_dimension` (alias `mrd`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\MaxResultDimension;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new MaxResultDimension(4096));

$url->build();
// _/mrd:4096/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `mrd:4096`.

## Parameters

| Parameter | Type  | Default  | Description                                          |
| --------- | ----- | -------- | ---------------------------------------------------- |
| `$size`   | `int` | required | Maximum dimension in pixels. `0` disables the limit. |

## Notes

- Values below 0 throw an `InvalidArgumentException`.
- imgproxy only honors this option when `IMGPROXY_ALLOW_SECURITY_OPTIONS` is enabled.

## See also

- [MaxSourceResolution](/api/options/source/max-source-resolution/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#max-result-dimension)
