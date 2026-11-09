---
title: StripMetadata
description: "Removes metadata, such as EXIF and IPTC, from the result."
option:
  class: StripMetadata
  name: strip_metadata
  alias: sm
  category: Output
  pro: false
---

Removes metadata, such as EXIF and IPTC, from the result.

**imgproxy:** `strip_metadata` (alias `sm`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\StripMetadata;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new StripMetadata());

$url->build();
// _/sm:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `sm:1`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$strip` | `bool` | `true` | `false` to keep the metadata. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [KeepCopyright](/api/options/output/keep-copyright/)
- [StripColorProfile](/api/options/output/strip-color-profile/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#strip-metadata)
