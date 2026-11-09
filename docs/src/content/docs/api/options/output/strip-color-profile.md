---
title: StripColorProfile
description: "Converts the image to sRGB and removes its color profile."
option:
  class: StripColorProfile
  name: strip_color_profile
  alias: scp
  category: Output
  pro: false
---

Converts the image to sRGB and removes its color profile.

**imgproxy:** `strip_color_profile` (alias `scp`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\StripColorProfile;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new StripColorProfile());

$url->build();
// _/scp:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `scp:1`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$strip` | `bool` | `true` | `false` to keep the profile. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [ColorProfile](/api/options/output/color-profile/)
- [StripMetadata](/api/options/output/strip-metadata/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#strip-color-profile)
