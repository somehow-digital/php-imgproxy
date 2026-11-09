---
title: MaxAnimationFrames
description: "Limits the number of frames of animated sources."
option:
  class: MaxAnimationFrames
  name: max_animation_frames
  alias: maf
  category: Source
  pro: false
---

Limits the number of frames of animated sources. It overrides the imgproxy configuration.

**imgproxy:** `max_animation_frames` (alias `maf`) · **Availability:** all editions

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\MaxAnimationFrames;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new MaxAnimationFrames(10));

$url->build();
// _/maf:10/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `maf:10`.

## Parameters

| Parameter | Type  | Default  | Description                           |
| --------- | ----- | -------- | ------------------------------------- |
| `$frames` | `int` | required | Maximum number of frames, at least 1. |

## Notes

- Values below 1 throw an `InvalidArgumentException`.
- imgproxy only honors this option when `IMGPROXY_ALLOW_SECURITY_OPTIONS` is enabled.

## See also

- [MaxAnimationFrameResolution](/api/options/source/max-animation-frame-resolution/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#max-animation-frames)
