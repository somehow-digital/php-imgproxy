---
title: Options
description: Overview of the supported processing options.
---

The library supports all imgproxy processing options. Each one is a class in `SomehowDigital\ImgProxy\Option`.

Constructor arguments follow the order of the imgproxy parameters. Optional parameters can be skipped with `null`, and trailing ones left out.

```php
use SomehowDigital\ImgProxy\Option\Trim;

new Trim(10);                // t:10
new Trim(10, null, true);    // t:10::1
```

For a given option, the [imgproxy documentation](https://docs.imgproxy.net/usage/processing) describes the exact behavior and what is available in imgproxy Pro.

## Groups

- **Sizing:** `Resize`, `Size`, `Width`, `Height`, `Padding`, `Trim`, `Rotate`, `Flip`
- **Cropping:** `Crop`, `CropAspectRatio`, `CropObjects`, `Gravity` and its variants
- **Effects:** `Adjust`, `Blur`, `Sharpen`, `Pixelate`, `Monochrome`, `Duotone`, `Colorize`, `Gradient`, `Background`
- **Output:** `Format`, `Quality`, `AutoQuality`, the encoder options, metadata and color profile options
- **Source:** `Page`, `Pages`, `Style`, `Hashsum`, `FallbackImageUrl`, source limits, video thumbnails
- **Watermark:** `Watermark` and its text, URL, size, rotation and shadow options
- **Delivery:** `Preset`, `CacheBuster`, `Expires`

The [API reference](/api/options/) lists every class with its constructor.
