---
title: PreserveHdr
description: "Keeps the high bit depth of HDR images instead of reducing them to 8 bits."
option:
  class: PreserveHdr
  name: preserve_hdr
  alias: ph
  category: Output
  pro: false
---

Keeps the high bit depth of HDR images instead of reducing them to 8 bits.

**imgproxy:** `preserve_hdr` (alias `ph`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\PreserveHdr;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new PreserveHdr());

$url->build();
// _/ph:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `ph:1`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$preserve` | `bool` | `true` | `false` to reduce to 8 bits. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- Introduced in imgproxy 4.0.

[imgproxy reference](https://docs.imgproxy.net/usage/processing#preserve-hdr)
