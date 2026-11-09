---
title: FallbackImageUrl
description: "Sets an image that is served when the source cannot be loaded."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: FallbackImageUrl
  name: fallback_image_url
  alias: fiu
  category: Source
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Sets an image that is served when the source cannot be loaded.

**imgproxy:** `fallback_image_url` (alias `fiu`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\FallbackImageUrl;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new FallbackImageUrl('https://example.com/fallback.jpg'));

$url->build();
// _/fiu:aHR0cHM6Ly9leGFtcGxlLmNvbS9mYWxsYmFjay5qcGc/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `fiu:aHR0cHM6Ly9leGFtcGxlLmNvbS9mYWxsYmFjay5qcGc`.

## Parameters

| Parameter | Type     | Default  | Description                                          |
| --------- | -------- | -------- | ---------------------------------------------------- |
| `$url`    | `string` | required | The URL of the fallback image, without any encoding. |

## Notes

- The library Base64-encodes the URL.

[imgproxy reference](https://docs.imgproxy.net/usage/processing#fallback-image-url)
