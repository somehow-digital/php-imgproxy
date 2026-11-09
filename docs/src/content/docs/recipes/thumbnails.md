---
title: Thumbnails
description: Square thumbnails that are cropped around the subject.
---

`fill` crops the image to the exact size, and smart gravity decides which part to keep.

```php
use SomehowDigital\ImgProxy\Url;

$base = Url::create()->source('https://example.com/photos/cat.jpg');
```

```php
use SomehowDigital\ImgProxy\Option\Gravity;
use SomehowDigital\ImgProxy\Option\GravityEnum;
use SomehowDigital\ImgProxy\Option\Height;
use SomehowDigital\ImgProxy\Option\Quality;
use SomehowDigital\ImgProxy\Option\Resize;
use SomehowDigital\ImgProxy\Option\ResizingType;
use SomehowDigital\ImgProxy\Option\ResizingTypeEnum;
use SomehowDigital\ImgProxy\Option\Width;

$base->options(
    new Resize(new ResizingType(ResizingTypeEnum::FILL), new Width(150), new Height(150)),
    new Gravity(GravityEnum::SMART),
    new Quality(80),
)->build('webp');
// _/rs:fill:150:150/g:sm/q:80/plain/https%3A%2F%2Fexample.com%2Fphotos%2Fcat.jpg@webp
```

## Related

- [`Resize`](/api/options/sizing/resize/)
- [`ResizingType`](/api/options/sizing/resizing-type/)
- [`Gravity`](/api/options/cropping/gravity/)
