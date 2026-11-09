---
title: Background
description: "Fills transparent areas and padding with a color."
option:
  class: Background
  name: background
  alias: bg
  category: Effects
  pro: false
---

Fills transparent areas and padding with a color. Use it to convert images with alpha to formats without it, such as JPEG.

**imgproxy:** `background` (alias `bg`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Background;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Background('ffffff'));

$url->build();
// _/bg:ffffff/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `bg:ffffff`.

## Parameters

| Parameter     | Type              | Default | Description                                                                                                                                       |
| ------------- | ----------------- | ------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$background` | `string\|int ...` | —       | Either one hexadecimal color, or the red, green and blue channels as three integers from 0 to 255. Without arguments, the background is disabled. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- `new Background(255, 255, 255)` and `new Background('ffffff')` are equivalent.

## See also

- [BackgroundAlpha](/api/options/effects/background-alpha/)
- [Extend](/api/options/sizing/extend/)
- [Padding](/api/options/sizing/padding/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#background)
