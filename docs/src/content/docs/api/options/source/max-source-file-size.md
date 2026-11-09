---
title: MaxSourceFileSize
description: "Limits the file size of the source."
option:
  class: MaxSourceFileSize
  name: max_src_file_size
  alias: msfs
  category: Source
  pro: false
---

Limits the file size of the source. It overrides the imgproxy configuration.

**imgproxy:** `max_src_file_size` (alias `msfs`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\MaxSourceFileSize;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new MaxSourceFileSize(10000000));

$url->build();
// _/msfs:10000000/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `msfs:10000000`.

## Parameters

| Parameter | Type  | Default  | Description                                    |
| --------- | ----- | -------- | ---------------------------------------------- |
| `$size`   | `int` | required | Maximum size in bytes. `0` disables the limit. |

## Notes

- Values below 0 throw an `InvalidArgumentException`.
- imgproxy only honors this option when `IMGPROXY_ALLOW_SECURITY_OPTIONS` is enabled.

## See also

- [MaxSourceResolution](/api/options/source/max-source-resolution/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#max-src-file-size)
