---
title: Enlarge
description: "Allows enlarging images that are smaller than the requested size."
option:
  class: Enlarge
  name: enlarge
  alias: el
  category: Sizing
  pro: false
---

Allows enlarging images that are smaller than the requested size.

**imgproxy:** `enlarge` (alias `el`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Enlarge;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Enlarge());

$url->build();
// _/el:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `el:1`.

## Parameters

| Parameter  | Type   | Default | Description                |
| ---------- | ------ | ------- | -------------------------- |
| `$enlarge` | `bool` | `true`  | `true` to allow enlarging. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Resize](/api/options/sizing/resize/)
- [Size](/api/options/sizing/size/)
- [Extend](/api/options/sizing/extend/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#enlarge)
