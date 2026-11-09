---
title: Recipes
description: Complete URLs for common tasks, each with the exact option calls.
---

Each recipe solves one task and shows the URL it builds. Every example was run against the library, and the comment shows the result. Where a value changes between runs, such as a signature or timestamp, a placeholder in braces stands in for it, and an ellipsis marks output that is shortened.

The recipes share one base builder:

```php
use SomehowDigital\ImgProxy\Url;

$base = Url::create()->source('https://example.com/photos/cat.jpg');
```

## Recipes

- [Thumbnails](/recipes/thumbnails/): square crops around the subject.
- [Responsive images](/recipes/responsive-images/): one URL per width of a `srcset`, and HiDPI screens.
- [Format conversion](/recipes/format-conversion/): modern formats, per-format quality, and transparency to JPEG.
- [Watermarks](/recipes/watermarks/): place the configured watermark.
- [Downloads](/recipes/downloads/): serve an image as a file with a chosen name.
- [Strip metadata](/recipes/strip-metadata/): remove EXIF and other metadata.
- [Secure URLs](/recipes/secure-urls/): sign, mask and expire URLs.

For the building blocks, see [Building URLs](/guide/building-urls/) and the [options reference](/api/options/).
