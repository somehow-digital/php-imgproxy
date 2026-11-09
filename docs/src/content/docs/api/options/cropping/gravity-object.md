---
title: GravityObject
description: "Gravity on the objects of the given classes, as detected by imgproxy’s object detection."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: GravityObject
  name: gravity
  alias: g
  category: Cropping
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Gravity on the objects of the given classes, as detected by imgproxy’s object detection.

**imgproxy:** `gravity` (alias `g`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\GravityObject;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new GravityObject('face', 'person'));

$url->build();
// _/g:obj:face:person/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `g:obj:face:person`.

## Parameters

| Parameter | Type         | Default | Description                                            |
| --------- | ------------ | ------- | ------------------------------------------------------ |
| `$values` | `string ...` | —       | Object class names. All detected objects when omitted. |

A dash means the argument can be left out. Trailing arguments that are left out or `null` are dropped from the URL, while a `null` before a given argument leaves an empty slot, so the following arguments keep their position.

## Notes

- Not allowed for `Extend` and `ExtendAspectRatio`.

## See also

- [GravityObjectWeight](/api/options/cropping/gravity-object-weight/)
- [ObjectsPosition](/api/options/cropping/objects-position/)
- [CropObjects](/api/options/cropping/crop-objects/)
- [Gravity](/api/options/cropping/gravity/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#gravity)
