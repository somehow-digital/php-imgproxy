---
title: VideoThumbnailTile
description: "Generates a sprite of video thumbnails."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: VideoThumbnailTile
  name: video_thumbnail_tile
  alias: vtt
  category: Source
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Generates a sprite of video thumbnails.

**imgproxy:** `video_thumbnail_tile` (alias `vtt`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\VideoThumbnailTile;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new VideoThumbnailTile(5, 4, 4, 200, 150));

$url->build();
// _/vtt:5:4:4:200:150/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `vtt:5:4:4:200:150`.

## Parameters

| Parameter     | Type    | Default  | Description                                                                                    |
| ------------- | ------- | -------- | ---------------------------------------------------------------------------------------------- |
| `$step`       | `int`   | required | Seconds between frames. `0` disables the sprite; a negative value is calculated automatically. |
| `$columns`    | `int`   | required | Columns of the sprite.                                                                         |
| `$rows`       | `int`   | required | Rows of the sprite.                                                                            |
| `$width`      | `int`   | required | Width of a tile.                                                                               |
| `$height`     | `int`   | required | Height of a tile.                                                                              |
| `$extend`     | `bool`  | —        | Extend tiles that are smaller than the tile size.                                              |
| `$trim`       | `bool`  | —        | Trim the tiles.                                                                                |
| `$fill`       | `bool`  | —        | Fill the tile size by cropping.                                                                |
| `$horizontal` | `float` | —        | Horizontal focus, from 0 to 1. imgproxy uses `0.5` when left out.                              |
| `$vertical`   | `float` | —        | Vertical focus, from 0 to 1. imgproxy uses `0.5` when left out.                                |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## See also

- [VideoThumbnailAnimation](/api/options/source/video-thumbnail-animation/)
- [VideoThumbnailSecond](/api/options/source/video-thumbnail-second/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#video-thumbnail-tile)
