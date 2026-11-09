---
title: VideoThumbnailSecond
description: "Sets the second of a video that is used for the thumbnail."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: VideoThumbnailSecond
  name: video_thumbnail_second
  alias: vts
  category: Source
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Sets the second of a video that is used for the thumbnail.

**imgproxy:** `video_thumbnail_second` (alias `vts`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\VideoThumbnailSecond;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new VideoThumbnailSecond(5));

$url->build();
// _/vts:5/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `vts:5`.

## Parameters

| Parameter | Type  | Default  | Description                      |
| --------- | ----- | -------- | -------------------------------- |
| `$second` | `int` | required | Timestamp in seconds, 0 or more. |

## Notes

- Negative values throw an `InvalidArgumentException`.

## See also

- [VideoThumbnailKeyframes](/api/options/source/video-thumbnail-keyframes/)
- [VideoThumbnailTile](/api/options/source/video-thumbnail-tile/)
- [VideoThumbnailAnimation](/api/options/source/video-thumbnail-animation/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#video-thumbnail-second)
