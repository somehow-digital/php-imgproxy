---
title: Hashsum
description: "Verifies the checksum of the source."
sidebar:
  badge:
    text: Pro
    variant: tip
option:
  class: Hashsum
  name: hashsum
  alias: hs
  category: Source
  pro: true
---

:::tip[imgproxy Pro]
This option is only available in imgproxy Pro.
:::

Verifies the checksum of the source. imgproxy answers with an error if it does not match.

**imgproxy:** `hashsum` (alias `hs`) · **Availability:** imgproxy Pro only

## Usage

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\Hashsum;
use SomehowDigital\ImgProxy\Option\HashsumTypeEnum;

$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Hashsum(
        HashsumTypeEnum::SHA256,
        '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08',
    ));

$url->build();
// _/hs:sha256:9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

The option appears in the URL as `hs:sha256:9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08`.

## Parameters

| Parameter  | Type                      | Default  | Description                                                                         |
| ---------- | ------------------------- | -------- | ----------------------------------------------------------------------------------- |
| `$type`    | `HashsumTypeEnum\|string` | required | A `HashsumTypeEnum` case or its value: `none`, `md5`, `sha1`, `sha256` or `sha512`. |
| `$hashsum` | `string`                  | required | The expected hash, hexadecimal.                                                     |

## Notes

- The checksum of video sources is not verified.

## See also

- [Enums](/api/enums/)

[imgproxy reference](https://docs.imgproxy.net/usage/processing#hashsum)
