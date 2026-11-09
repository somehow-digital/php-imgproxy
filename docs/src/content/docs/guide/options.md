---
title: Option arguments
description: How options take their arguments.
---

The library supports all imgproxy processing options. Each one is a class in `SomehowDigital\ImgProxy\Option`, with its own page in the [API reference](/api/options/).

## Arguments

Constructor arguments follow the order of the imgproxy parameters. Optional parameters can be skipped with `null`, and trailing ones left out.

```php
use SomehowDigital\ImgProxy\Option\Trim;

new Trim(10);                // t:10
new Trim(10, null, true);    // t:10::1
```

Where imgproxy expects a boolean, the argument is a `bool`. Most of those options default to `true`, so `new Enlarge()` turns the option on and `new Enlarge(false)` turns it off.

## Options that contain options

`Resize`, `Size`, `Adjust` and `Extend` take other options as arguments instead of raw values. They are the same classes you would pass to `options()` on their own. A nested option contributes its parameters, so `new Width(300)` inside `Resize` adds `300` to the `rs:…` segment.

## Values that are encoded for you

The library encodes the values that imgproxy expects Base64-encoded: `WatermarkUrl`, `WatermarkText`, `Style`, `FallbackImageUrl` and `Filename`. Pass the plain value.

## Variable arguments

Some options take any number of arguments: `Background`, `BlurAreas`, `BlurDetections`, `CropObjects`, `DrawDetections`, `GravityObject`, `GravityObjectWeight`, `Preset` and `SkipProcessing`.

```php
new Preset('thumbnail', 'sharp');   // pr:thumbnail:sharp
new GravityObject('face', 'person'); // g:obj:face:person
```

## Validation

Arguments that imgproxy is documented to reject throw an `InvalidArgumentException`, for example a negative `Rotate` angle, a `Brightness` outside -255 to 255, or a smart gravity for `Extend`. Values that are not part of an enum throw a `ValueError`.

## Which options exist

The [options overview](/api/options/) lists all of them by group, and marks the ones that [need imgproxy Pro](/guide/pro/).
