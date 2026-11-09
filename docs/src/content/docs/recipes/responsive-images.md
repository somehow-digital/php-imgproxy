---
title: Responsive images
description: One URL per width of a srcset, and sizes for HiDPI screens.
---

```php
use SomehowDigital\ImgProxy\Url;

$base = Url::create()->source('https://example.com/photos/cat.jpg');
```

## A srcset

Build one URL for each width.

```php
use SomehowDigital\ImgProxy\Option\Quality;
use SomehowDigital\ImgProxy\Option\Width;

$srcset = implode(', ', array_map(
    static fn(int $width): string => sprintf(
        'https://imgproxy.example.com/%s %dw',
        $base->options(new Width($width), new Quality(75))->build('avif'),
        $width,
    ),
    [320, 640, 1280],
));
// https://imgproxy.example.com/_/w:320/q:75/plain/…@avif 320w, …
```

## HiDPI

`Dpr` multiplies the size, so you describe the image in CSS pixels.

```php
use SomehowDigital\ImgProxy\Option\Dpr;
use SomehowDigital\ImgProxy\Option\Width;

$base->options(new Width(300), new Dpr(2))->build();
// _/w:300/dpr:2/plain/https%3A%2F%2Fexample.com%2Fphotos%2Fcat.jpg
```

## Related

- [`Width`](/api/options/sizing/width/)
- [`Dpr`](/api/options/sizing/dpr/)
- [`Quality`](/api/options/output/quality/)
