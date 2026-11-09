---
title: ReturnAttachment
description: "Makes imgproxy answer with a Content-Disposition: attachment header, so browsers download the file."
option:
  class: ReturnAttachment
  name: return_attachment
  alias: att
  category: Output
  pro: false
---

Makes imgproxy answer with a `Content-Disposition: attachment` header, so browsers download the file.

**imgproxy:** `return_attachment` (alias `att`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\ReturnAttachment;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new ReturnAttachment());

$url->build();
// _/att:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `att:1`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$return` | `bool` | `true` | `false` to disable it. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [Filename](/api/options/output/filename/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#return-attachment)
