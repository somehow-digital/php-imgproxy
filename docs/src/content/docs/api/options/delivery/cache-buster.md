---
title: CacheBuster
description: "Adds a value to the URL that has no effect on processing, so caches treat the result as a new resource."
option:
  class: CacheBuster
  name: cachebuster
  alias: cb
  category: Delivery
  pro: false
---

Adds a value to the URL that has no effect on processing, so caches treat the result as a new resource.

**imgproxy:** `cachebuster` (alias `cb`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\CacheBuster;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new CacheBuster('v2'));

$url->build();
// _/cb:v2/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `cb:v2`.

## Parameters

| Parameter | Type     | Default  | Description |
| --------- | -------- | -------- | ----------- |
| `$value`  | `string` | required | Any string. |

## See also

- [Expires](/api/options/delivery/expires/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#cache-buster)
