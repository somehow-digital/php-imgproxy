---
title: Raw
description: "Streams the source as it is, without processing or checks."
option:
  class: Raw
  name: raw
  category: Output
  pro: false
---

Streams the source as it is, without processing or checks.

**imgproxy:** `raw` · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Raw;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Raw());

$url->build();
// _/raw:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `raw:1`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$raw` | `bool` | `true` | `false` to disable it. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- The source is not loaded into memory and is not limited by the worker count.

## See also

- [SkipProcessing](/api/options/output/skip-processing/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#raw)
