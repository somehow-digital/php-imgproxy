---
title: AutoRotate
description: "Applies the EXIF orientation of the source and removes the tag."
option:
  class: AutoRotate
  name: auto_rotate
  alias: ar
  category: Sizing
  pro: false
---

Applies the EXIF orientation of the source and removes the tag.

**imgproxy:** `auto_rotate` (alias `ar`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\AutoRotate;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new AutoRotate(false));

$url->build();
// _/ar:0/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `ar:0`.

## Parameters

| Parameter | Type   | Default | Description                              |
| --------- | ------ | ------- | ---------------------------------------- |
| `$rotate` | `bool` | `true`  | `false` disables the automatic rotation. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Rotate](/api/options/sizing/rotate/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#auto-rotate)
