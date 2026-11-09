---
title: Preset
description: "Applies presets that are configured in imgproxy."
option:
  class: Preset
  name: preset
  alias: pr
  category: Delivery
  pro: false
---

Applies presets that are configured in imgproxy.

**imgproxy:** `preset` (alias `pr`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Preset;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Preset('thumbnail', 'sharp'));

$url->build();
// _/pr:thumbnail:sharp/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `pr:thumbnail:sharp`.

## Parameters

| Parameter  | Type         | Default | Description               |
| ---------- | ------------ | ------- | ------------------------- |
| `$presets` | `string ...` | —       | The names of the presets. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Url](/api/url/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#preset)
