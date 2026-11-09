---
title: Getting started
description: Install the library and build your first imgproxy URL.
---

## Requirements

- PHP 8.2 or newer
- The `openssl` extension

## Before you start

You need a running [imgproxy](https://imgproxy.net/) instance to serve the URLs. This library only builds them.

## Installation

```bash
composer require somehow-digital/imgproxy
```

## First URL

```php
use SomehowDigital\ImgProxy\Option\Height;
use SomehowDigital\ImgProxy\Option\Width;
use SomehowDigital\ImgProxy\Url;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(
        new Width(100),
        new Height(100),
    );

$url->build();
// _/w:100/h:100/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

`build()` returns the path of the URL. Prepend the address of your imgproxy instance to serve it:

```php
$address = 'https://imgproxy.example.com/' . $url->build();
```

The leading `_` is the placeholder imgproxy accepts when [signing](/guide/signing/) is not used.

## Next steps

- [How URLs work](/guide/concepts/)
- [Building URLs](/guide/building-urls/)
- [Recipes](/recipes/)
- [Pipelines](/guide/pipelines/)
- [Source masking](/guide/masking/) and [signing](/guide/signing/)
