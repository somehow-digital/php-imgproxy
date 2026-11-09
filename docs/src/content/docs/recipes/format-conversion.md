---
title: Format conversion
description: Convert to modern formats, set quality per format, and flatten transparency.
---

```php
use SomehowDigital\ImgProxy\Url;

$base = Url::create()->source('https://example.com/photos/cat.jpg');
```

## Set the output format

Pass the format to `build()`. It becomes the extension of the URL.

```php
use SomehowDigital\ImgProxy\Option\Width;

$base->options(new Width(800))->build('webp');
// _/w:800/plain/https%3A%2F%2Fexample.com%2Fphotos%2Fcat.jpg@webp
```

## Quality per format

```php
use SomehowDigital\ImgProxy\Option\FormatQuality;
use SomehowDigital\ImgProxy\Option\Width;

$base->options(new Width(800), new FormatQuality(['webp' => 75, 'avif' => 60, 'jpeg' => 82]))->build();
// _/w:800/fq:webp:75:avif:60:jpeg:82/plain/https%3A%2F%2Fexample.com%2Fphotos%2Fcat.jpg
```

## Transparency to JPEG

JPEG has no alpha channel, so fill the transparent areas.

```php
use SomehowDigital\ImgProxy\Option\Background;
use SomehowDigital\ImgProxy\Option\Width;

$base->options(new Width(400), new Background('ffffff'))->build('jpg');
// _/w:400/bg:ffffff/plain/https%3A%2F%2Fexample.com%2Fphotos%2Fcat.jpg@jpg
```

## Related

- [`Format`](/api/options/output/format/)
- [`FormatQuality`](/api/options/output/format-quality/)
- [`Background`](/api/options/effects/background/)
