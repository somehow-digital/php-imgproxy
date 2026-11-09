---
title: VideoThumbnailKeyframes
description: "Restricts video thumbnails to keyframes."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: VideoThumbnailKeyframes
  name: video_thumbnail_keyframes
  alias: vtk
  category: Source
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Restricts video thumbnails to keyframes.

**imgproxy:** `video_thumbnail_keyframes` (alias `vtk`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\VideoThumbnailKeyframes;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new VideoThumbnailKeyframes());

$url->build();
// _/vtk:1/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `vtk:1`.

## Parameters

| Parameter    | Type   | Default | Description            |
| ------------ | ------ | ------- | ---------------------- |
| `$keyframes` | `bool` | `true`  | `false` to disable it. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [VideoThumbnailSecond](/api/options/source/video-thumbnail-second/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#video-thumbnail-keyframes)
