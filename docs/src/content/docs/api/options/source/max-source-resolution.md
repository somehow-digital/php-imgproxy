---
title: MaxSourceResolution
description: "Limits the resolution of the source."
option:
  class: MaxSourceResolution
  name: max_src_resolution
  alias: msr
  category: Source
  pro: false
---

Limits the resolution of the source. It overrides the imgproxy configuration.

**imgproxy:** `max_src_resolution` (alias `msr`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\MaxSourceResolution;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new MaxSourceResolution(50));

$url->build();
// _/msr:50/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `msr:50`.

## Parameters

| Parameter     | Type  | Default  | Description                                       |
| ------------- | ----- | -------- | ------------------------------------------------- |
| `$resolution` | `int` | required | Maximum resolution in megapixels, greater than 0. |

## Notes

- Values below 1 throw an `InvalidArgumentException`.
- imgproxy only honors this option when `IMGPROXY_ALLOW_SECURITY_OPTIONS` is enabled.

## See also

- [MaxSourceFileSize](/api/options/source/max-source-file-size/)
- [MaxResultDimension](/api/options/sizing/max-result-dimension/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#max-src-resolution)
