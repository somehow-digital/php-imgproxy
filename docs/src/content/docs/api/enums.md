---
title: Enums
description: Enum values accepted by options.
---

`SomehowDigital\ImgProxy\Option`

Options accept the value as a string as well as the enum, except `ResizingType`, which takes the enum only.

## `FormatEnum`

`png`, `jpg`, `jpeg`, `jxl`, `webp`, `avif`, `gif`, `ico`, `svg`, `heic`, `bmp`, `tiff`, `mp4`, `best`

## `GravityEnum`

| Case                                                   | Value                          |
| ------------------------------------------------------ | ------------------------------ |
| `NORTH`, `EAST`, `SOUTH`, `WEST`                       | `no`, `ea`, `so`, `we`         |
| `NORTH_EAST`, `NORTH_WEST`, `SOUTH_EAST`, `SOUTH_WEST` | `noea`, `nowe`, `soea`, `sowe` |
| `CENTER`                                               | `ce`                           |
| `SMART`                                                | `sm`                           |
| `FOCUS_POINT`                                          | `fp`                           |
| `OBJECT`                                               | `obj`                          |
| `OBJECT_WEIGHT`                                        | `objw`                         |

## `ResizingTypeEnum`

`fit`, `fill`, `fill-down`, `force`, `auto`

## `ResizingAlgorithmEnum`

`nearest`, `linear`, `cubic`, `lanczos2`, `lanczos3`

## `WatermarkPositionEnum`

`no`, `ea`, `so`, `we`, `noea`, `nowe`, `soea`, `sowe`, `ce`, `re`, `ch`

## `ObjectsPositionTypeEnum`

`no`, `ea`, `so`, `we`, `noea`, `nowe`, `soea`, `sowe`, `ce`, `fp`, `prop`

## `HashsumTypeEnum`

`none`, `md5`, `sha1`, `sha256`, `sha512`
