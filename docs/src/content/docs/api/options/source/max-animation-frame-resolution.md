---
title: MaxAnimationFrameResolution
description: "Limits the resolution of a single frame of animated sources."
option:
  class: MaxAnimationFrameResolution
  name: max_animation_frame_resolution
  alias: mafr
  category: Source
  pro: false
---

Limits the resolution of a single frame of animated sources. It overrides the imgproxy configuration.

**imgproxy:** `max_animation_frame_resolution` (alias `mafr`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\MaxAnimationFrameResolution;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new MaxAnimationFrameResolution(2));

$url->build();
// _/mafr:2/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `mafr:2`.

## Parameters

| Parameter     | Type  | Default  | Description                       |
| ------------- | ----- | -------- | --------------------------------- |
| `$resolution` | `int` | required | Maximum resolution in megapixels. |

## Notes

- imgproxy only honors this option when `IMGPROXY_ALLOW_SECURITY_OPTIONS` is enabled.

## See also

- [MaxAnimationFrames](/api/options/source/max-animation-frames/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#max-animation-frame-resolution)
