---
title: Enums
description: Enum values accepted by options.
---

`SomehowDigital\ImgProxy\Option`

Options accept the value as a string as well as the enum, except `ResizingType`, which takes the enum only.

## `FormatEnum`

`png`, `jpg`, `jpeg`, `jxl`, `webp`, `avif`, `gif`, `ico`, `svg`, `heic`, `bmp`, `tiff`, `mp4`, `best` (Pro)

## `GravityEnum`

| Case                                                   | Value                          |
| ------------------------------------------------------ | ------------------------------ |
| `NORTH`, `EAST`, `SOUTH`, `WEST`                       | `no`, `ea`, `so`, `we`         |
| `NORTH_EAST`, `NORTH_WEST`, `SOUTH_EAST`, `SOUTH_WEST` | `noea`, `nowe`, `soea`, `sowe` |
| `CENTER`                                               | `ce`                           |
| `SMART`                                                | `sm`                           |
| `FOCUS_POINT`                                          | `fp`                           |
| `OBJECT` (Pro)                                         | `obj`                          |
| `OBJECT_WEIGHT` (Pro)                                  | `objw`                         |

## `ResizingTypeEnum`

`fit`, `fill`, `fill-down`, `force`, `auto`

## `ResizingAlgorithmEnum`

:::tip[imgproxy Pro]
[`ResizingAlgorithm`](/api/options/sizing/resizing-algorithm/) is only available in imgproxy Pro.
:::

`nearest`, `linear`, `cubic`, `lanczos2`, `lanczos3`

## `WatermarkPositionEnum`

`no`, `ea`, `so`, `we`, `noea`, `nowe`, `soea`, `sowe`, `ce`, `re`, `ch` (Pro)

## `ObjectsPositionTypeEnum`

:::tip[imgproxy Pro]
[`ObjectsPosition`](/api/options/cropping/objects-position/) is only available in imgproxy Pro.
:::

`no`, `ea`, `so`, `we`, `noea`, `nowe`, `soea`, `sowe`, `ce`, `fp`, `prop`

## `HashsumTypeEnum`

:::tip[imgproxy Pro]
[`Hashsum`](/api/options/source/hashsum/) is only available in imgproxy Pro.
:::

`none`, `md5`, `sha1`, `sha256`, `sha512`
