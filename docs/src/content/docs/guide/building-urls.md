---
title: Building URLs
description: Sources, options and output formats.
---

## Immutability

`Url` never changes itself. `source()` and `options()` return a new instance, so a base can be reused.

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Height;
use SomehowDigital\ImgProxy\Option\Width;

$base = Url::create()->source('https://example.com/image.jpg');

$thumbnail = $base->options(new Width(100), new Height(100));
$banner = $base->options(new Width(1200));
```

`options()` appends: calling it twice keeps the options of both calls.

## Options

Each imgproxy [processing option](https://docs.imgproxy.net/usage/processing) is a class in the `SomehowDigital\ImgProxy\Option` namespace. The URL uses the short alias of an option when it has one.

```php
use SomehowDigital\ImgProxy\Option\Quality;
use SomehowDigital\ImgProxy\Option\Width;

$base->options(new Width(100), new Quality(80))->build();
// _/w:100/q:80/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

Some options take other options, or enums, as arguments:

```php
use SomehowDigital\ImgProxy\Option\Enlarge;
use SomehowDigital\ImgProxy\Option\Height;
use SomehowDigital\ImgProxy\Option\Resize;
use SomehowDigital\ImgProxy\Option\ResizingType;
use SomehowDigital\ImgProxy\Option\ResizingTypeEnum;
use SomehowDigital\ImgProxy\Option\Width;

$base->options(
    new Resize(
        new ResizingType(ResizingTypeEnum::FILL),
        new Width(300),
        new Height(200),
        new Enlarge(),
    ),
)->build();
// _/rs:fill:300:200:1/plain/...
```

Most options that take an enum also accept its value as a string, e.g. `new Gravity('sm')`. `ResizingType` takes the enum only. An invalid value throws a `ValueError`.

See [Options](/guide/options/) for an overview and the [API reference](/api/options/) for every constructor.

## Output format

Pass the format to `build()` as a `FormatEnum` or a string. The URL gets the extension of that format.

```php
use SomehowDigital\ImgProxy\Option\FormatEnum;

$base->options(new Width(100))->build('webp');
// _/w:100/plain/https%3A%2F%2Fexample.com%2Fimage.jpg@webp

$base->options(new Width(100))->build(FormatEnum::AVIF);
// _/w:100/plain/https%3A%2F%2Fexample.com%2Fimage.jpg@avif
```

The `Format` option sets the format as a processing option instead.
