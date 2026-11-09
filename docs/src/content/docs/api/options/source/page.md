---
title: Page
description: "Selects the page or frame of a multi-page or animated source."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Page
  name: page
  alias: pg
  category: Source
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Selects the page or frame of a multi-page or animated source.

**imgproxy:** `page` (alias `pg`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Page;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Page(1));

$url->build();
// _/pg:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `pg:1`.

## Parameters

| Parameter | Type  | Default  | Description                   |
| --------- | ----- | -------- | ----------------------------- |
| `$page`   | `int` | required | Zero-based index of the page. |

## Notes

- Negative values throw an `InvalidArgumentException`.

## See also

- [Pages](/api/options/source/pages/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#page)
