---
title: Style
description: "Injects CSS into SVG sources."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Style
  name: style
  alias: st
  category: Source
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Injects CSS into SVG sources.

**imgproxy:** `style` (alias `st`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Style;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Style('path{fill:#f00}'));

$url->build();
// _/st:cGF0aHtmaWxsOiNmMDB9/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `st:cGF0aHtmaWxsOiNmMDB9`.

## Parameters

| Parameter | Type     | Default  | Description                |
| --------- | -------- | -------- | -------------------------- |
| `$style`  | `string` | required | CSS, without any encoding. |

## Notes

- The library Base64-encodes the CSS.

[imgproxy reference](https://docs.imgproxy.net/usage/processing#style)
