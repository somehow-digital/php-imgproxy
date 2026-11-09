---
title: Pages
description: "Sets the number of pages that are stacked vertically in the result."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Pages
  name: pages
  alias: pgs
  category: Source
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Sets the number of pages that are stacked vertically in the result.

**imgproxy:** `pages` (alias `pgs`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Pages;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Pages(3));

$url->build();
// _/pgs:3/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `pgs:3`.

## Parameters

| Parameter | Type  | Default  | Description                  |
| --------- | ----- | -------- | ---------------------------- |
| `$pages`  | `int` | required | Number of pages, at least 1. |

## Notes

- Values below 1 throw an `InvalidArgumentException`.

## See also

- [Page](/api/options/source/page/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#pages)
