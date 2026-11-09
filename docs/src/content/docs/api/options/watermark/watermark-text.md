---
title: WatermarkText
description: "Renders a text as the watermark."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: WatermarkText
  name: watermark_text
  alias: wmt
  category: Watermark
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Renders a text as the watermark.

**imgproxy:** `watermark_text` (alias `wmt`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\WatermarkText;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new WatermarkText('© 2026 Example'));

$url->build();
// _/wmt:wqkgMjAyNiBFeGFtcGxl/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `wmt:wqkgMjAyNiBFeGFtcGxl`.

## Parameters

| Parameter | Type     | Default  | Description                                                            |
| --------- | -------- | -------- | ---------------------------------------------------------------------- |
| `$text`   | `string` | required | The text, without any encoding. Pango markup is supported by imgproxy. |

## Notes

- The library Base64-encodes the text.

## See also

- [Watermark](/api/options/watermark/watermark/)
- [WatermarkUrl](/api/options/watermark/watermark-url/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#watermark-text)
