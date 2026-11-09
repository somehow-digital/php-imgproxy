---
title: WatermarkUrl
description: "Sets the image that is used as the watermark."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: WatermarkUrl
  name: watermark_url
  alias: wmu
  category: Watermark
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Sets the image that is used as the watermark.

**imgproxy:** `watermark_url` (alias `wmu`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\WatermarkUrl;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new WatermarkUrl('https://example.com/logo.png'));

$url->build();
// _/wmu:aHR0cHM6Ly9leGFtcGxlLmNvbS9sb2dvLnBuZw/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `wmu:aHR0cHM6Ly9leGFtcGxlLmNvbS9sb2dvLnBuZw`.

## Parameters

| Parameter | Type     | Default  | Description                                           |
| --------- | -------- | -------- | ----------------------------------------------------- |
| `$url`    | `string` | required | The URL of the watermark image, without any encoding. |

## Notes

- The library Base64-encodes the URL.

## See also

- [Watermark](/api/options/watermark/watermark/)
- [WatermarkText](/api/options/watermark/watermark-text/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#watermark-url)
