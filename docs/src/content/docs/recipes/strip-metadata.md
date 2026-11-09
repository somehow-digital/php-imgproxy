---
title: Strip metadata
description: Remove EXIF and other metadata from the result.
---

```php
use SomehowDigital\ImgProxy\Url;

$base = Url::create()->source('https://example.com/photos/cat.jpg');
```

```php
use SomehowDigital\ImgProxy\Option\StripMetadata;
use SomehowDigital\ImgProxy\Option\Width;

$base->options(new StripMetadata(), new Width(300))->build();
// _/sm:1/w:300/plain/https%3A%2F%2Fexample.com%2Fphotos%2Fcat.jpg
```

To keep the copyright notice while everything else is removed, add `KeepCopyright`.

## Related

- [`StripMetadata`](/api/options/output/strip-metadata/)
- [`KeepCopyright`](/api/options/output/keep-copyright/)
- [`StripColorProfile`](/api/options/output/strip-color-profile/)
