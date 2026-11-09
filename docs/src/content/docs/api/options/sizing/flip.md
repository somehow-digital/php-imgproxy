---
title: Flip
description: "Flips the image horizontally, vertically or both."
option:
  class: Flip
  name: flip
  alias: fl
  category: Sizing
  pro: false
---

Flips the image horizontally, vertically or both.

**imgproxy:** `flip` (alias `fl`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Flip;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Flip(true, false));

$url->build();
// _/fl:1:0/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `fl:1:0`.

## Parameters

| Parameter     | Type   | Default  | Description                     |
| ------------- | ------ | -------- | ------------------------------- |
| `$horizontal` | `bool` | required | Flip along the horizontal axis. |
| `$vertical`   | `bool` | —        | Flip along the vertical axis.   |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Rotate](/api/options/sizing/rotate/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#flip)
