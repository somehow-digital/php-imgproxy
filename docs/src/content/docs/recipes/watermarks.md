---
title: Watermarks
description: Place the watermark that is configured in imgproxy.
---

The watermark image is configured in imgproxy. This places it in the bottom right corner, 20 pixels from the edges, scaled to 20% of the resulting image.

```php
use SomehowDigital\ImgProxy\Url;

$base = Url::create()->source('https://example.com/photos/cat.jpg');
```

```php
use SomehowDigital\ImgProxy\Option\Watermark;
use SomehowDigital\ImgProxy\Option\Width;

$base->options(new Width(800), new Watermark(0.6, 'soea', 20, 20, 0.2))->build();
// _/w:800/wm:0.6:soea:20:20:0.2/plain/https%3A%2F%2Fexample.com%2Fphotos%2Fcat.jpg
```

With imgproxy Pro, `WatermarkUrl` and `WatermarkText` choose the watermark per URL. See [imgproxy Pro](/guide/pro/).

## Related

- [`Watermark`](/api/options/watermark/watermark/)
- [`WatermarkUrl`](/api/options/watermark/watermark-url/)
- [`WatermarkText`](/api/options/watermark/watermark-text/)
