---
title: ResizingAlgorithm
description: "Sets the algorithm used to resample the image."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: ResizingAlgorithm
  name: resizing_algorithm
  alias: ra
  category: Sizing
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Sets the algorithm used to resample the image.

**imgproxy:** `resizing_algorithm` (alias `ra`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\ResizingAlgorithm;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new ResizingAlgorithm('lanczos3'));

$url->build();
// _/ra:lanczos3/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `ra:lanczos3`.

## Parameters

| Parameter    | Type                            | Default  | Description                                                                                                                                  |
| ------------ | ------------------------------- | -------- | -------------------------------------------------------------------------------------------------------------------------------------------- |
| `$algorithm` | `ResizingAlgorithmEnum\|string` | required | A `ResizingAlgorithmEnum` case or its value: `nearest`, `linear`, `cubic`, `lanczos2` or `lanczos3`. imgproxy uses `lanczos3` when left out. |

[imgproxy reference](https://docs.imgproxy.net/usage/processing#resizing-algorithm)
