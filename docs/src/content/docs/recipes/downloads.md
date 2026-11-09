---
title: Downloads
description: Serve an image as a file with a chosen name.
---

`ReturnAttachment` makes browsers download the image, and `Filename` names the file.

```php
use SomehowDigital\ImgProxy\Url;

$base = Url::create()->source('https://example.com/photos/cat.jpg');
```

```php
use SomehowDigital\ImgProxy\Option\Filename;
use SomehowDigital\ImgProxy\Option\ReturnAttachment;
use SomehowDigital\ImgProxy\Option\Width;

$base->options(new ReturnAttachment(), new Filename('cat-large.jpg'), new Width(2000))->build('jpg');
// _/att:1/fn:Y2F0LWxhcmdlLmpwZw:1/w:2000/plain/https%3A%2F%2Fexample.com%2Fphotos%2Fcat.jpg@jpg
```

Pass the file name as it is. The library sends it Base64-encoded, as imgproxy expects.

## Related

- [`ReturnAttachment`](/api/options/output/return-attachment/)
- [`Filename`](/api/options/output/filename/)
