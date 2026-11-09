---
title: KeepCopyright
description: "Keeps the copyright information when metadata is stripped."
option:
  class: KeepCopyright
  name: keep_copyright
  alias: kcr
  category: Output
  pro: false
---

Keeps the copyright information when metadata is stripped.

**imgproxy:** `keep_copyright` (alias `kcr`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\KeepCopyright;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new KeepCopyright());

$url->build();
// _/kcr:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `kcr:1`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$keep` | `bool` | `true` | `false` to drop it. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [StripMetadata](/api/options/output/strip-metadata/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#keep-copyright)
