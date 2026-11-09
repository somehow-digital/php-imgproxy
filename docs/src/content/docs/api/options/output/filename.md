---
title: Filename
description: "Sets the file name used in the Content-Disposition header."
option:
  class: Filename
  name: filename
  alias: fn
  category: Output
  pro: false
---

Sets the file name used in the `Content-Disposition` header.

**imgproxy:** `filename` (alias `fn`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Filename;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Filename('photo.jpg'));

$url->build();
// _/fn:cGhvdG8uanBn:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `fn:cGhvdG8uanBn:1`.

## Parameters

| Parameter | Type | Default | Description |
| --- | --- | --- | --- |
| `$filename` | `string` | required | The file name, without any encoding. |

## Notes

- The library sends the name Base64-encoded and sets imgproxy’s encoded flag, because imgproxy does not unescape a percent-encoded name.

## See also

- [ReturnAttachment](/api/options/output/return-attachment/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#filename)
