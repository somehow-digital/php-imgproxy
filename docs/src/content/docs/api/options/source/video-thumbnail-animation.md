---
title: VideoThumbnailAnimation
description: "Generates an animation from video frames."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: VideoThumbnailAnimation
  name: video_thumbnail_animation
  alias: vta
  category: Source
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Generates an animation from video frames.

**imgproxy:** `video_thumbnail_animation` (alias `vta`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\VideoThumbnailAnimation;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new VideoThumbnailAnimation(1, 100, 10, 200, 150));

$url->build();
// _/vta:1:100:10:200:150/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `vta:1:100:10:200:150`.

## Parameters

| Parameter     | Type    | Default  | Description                                                       |
| ------------- | ------- | -------- | ----------------------------------------------------------------- |
| `$step`       | `int`   | required | Seconds between frames. `0` disables the animation.               |
| `$delay`      | `int`   | required | Delay between frames in milliseconds.                             |
| `$frames`     | `int`   | required | Number of frames.                                                 |
| `$width`      | `int`   | required | Width of a frame.                                                 |
| `$height`     | `int`   | required | Height of a frame.                                                |
| `$extend`     | `bool`  | —        | Extend frames that are smaller than the frame size.               |
| `$trim`       | `bool`  | —        | Trim the frames.                                                  |
| `$fill`       | `bool`  | —        | Fill the frame size by cropping.                                  |
| `$horizontal` | `float` | —        | Horizontal focus, from 0 to 1. imgproxy uses `0.5` when left out. |
| `$vertical`   | `float` | —        | Vertical focus, from 0 to 1. imgproxy uses `0.5` when left out.   |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [VideoThumbnailTile](/api/options/source/video-thumbnail-tile/)
- [VideoThumbnailSecond](/api/options/source/video-thumbnail-second/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#video-thumbnail-animation)
