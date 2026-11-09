---
title: Format
description: "Sets the output format as a processing option."
sidebar:
  badge:
    text: Partly Pro
    variant: note
option:
  class: Format
  name: format
  alias: f
  category: Output
  pro: partial
---

:::note[Partly imgproxy Pro]
The `best` format requires imgproxy Pro.
:::

Sets the output format as a processing option. It is equivalent to the extension of the URL.

**imgproxy:** `format` (alias `f`) · **Availability:** all editions; the `best` format needs Pro

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Format;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Format('webp'));

$url->build();
// _/f:webp/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `f:webp`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$format` | `FormatEnum\|string` | required | A `FormatEnum` case or its value, such as `webp`, `avif` or `png`. |

## Notes

- Alternatively, pass the format to `Url::build()`, which appends it as an extension.

## See also

- [Url](/api/url/)
- [Enums](/api/enums/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#format)
