---
title: EnforceThumbnail
description: "Uses the thumbnail embedded in the source, when there is one."
option:
  class: EnforceThumbnail
  name: enforce_thumbnail
  alias: eth
  category: Output
  pro: false
---

Uses the thumbnail embedded in the source, when there is one.

**imgproxy:** `enforce_thumbnail` (alias `eth`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\EnforceThumbnail;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new EnforceThumbnail());

$url->build();
// _/eth:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `eth:1`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$enforce` | `bool` | `true` | `false` to disable it. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- Only works for HEIC and AVIF sources.

[imgproxy reference](https://docs.imgproxy.net/usage/processing#enforce-thumbnail)
