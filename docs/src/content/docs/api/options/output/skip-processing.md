---
title: SkipProcessing
description: "Skips processing for sources of the given formats, when the result would keep the source format."
option:
  class: SkipProcessing
  name: skip_processing
  alias: skp
  category: Output
  pro: false
---

Skips processing for sources of the given formats, when the result would keep the source format.

**imgproxy:** `skip_processing` (alias `skp`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\SkipProcessing;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new SkipProcessing('svg', 'gif'));

$url->build();
// _/skp:svg:gif/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `skp:svg:gif`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$formats` | `string ...` | — | Format extensions to skip. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- Does not apply to video thumbnails.

## See also

- [Raw](/api/options/output/raw/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#skip-processing)
