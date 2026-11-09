---
title: How URLs work
description: The anatomy of an imgproxy URL and how the builder maps to it.
---

imgproxy processes an image when its URL is requested. Everything it needs to know is in the URL, so building the URL correctly is the whole job. This library does that part.

## Anatomy

```text
/_/rs:fill:300:200/g:sm/plain/https%3A%2F%2Fexample.com%2Fimage.jpg@webp
```

Read from left to right, the path has five parts:

| Part      | In the builder                       | Notes                                                                                                 |
| --------- | ------------------------------------ | ----------------------------------------------------------------------------------------------------- |
| Signature | [`Signer`](/guide/signing/)          | `_` when the URL is not signed.                                                                       |
| Options   | [`options()`](/guide/building-urls/) | One segment per option, separated by `/`. A [pipeline](/guide/pipelines/) separates steps with `/-/`. |
| Mask      | [`Masker`](/guide/masking/)          | `plain` for a visible source, `enc` for an encrypted one, empty for Base64.                           |
| Source    | `source()`                           | The URL of the original image.                                                                        |
| Format    | `build($format)`                     | An extension: `@webp` after a plain source, `.webp` after an encoded or encrypted one.                |

`build()` returns everything after the address of your instance, from the signature on. Prepend your instance yourself:

```php
$address = 'https://imgproxy.example.com/' . $url->build();
```

## One option, one segment

An option is its alias, or its name when it has none, followed by its parameters, separated by colons.

| PHP                                                                                     | URL segment                        |
| --------------------------------------------------------------------------------------- | ---------------------------------- |
| `new Width(300)`                                                                        | `w:300`                            |
| `new Resize(new ResizingType(ResizingTypeEnum::FILL), new Width(300), new Height(200))` | `rs:fill:300:200`                  |
| `new Dpr(2)`                                                                            | `dpr:2` (this option has no alias) |

Booleans become `1` and `0`, and enums become their value.

## Builder and instance

The library only builds URLs. It does not talk to imgproxy, check that a source exists, or know which options your instance has enabled. Some options, such as the limits `MaxSourceResolution` and `MaxSourceFileSize`, are only honored by imgproxy when `IMGPROXY_ALLOW_SECURITY_OPTIONS` is set, and the [Pro options](/guide/pro/) need imgproxy Pro. The library does validate what it can know on its own: the types of arguments, and values that imgproxy is documented to reject, such as a negative `Rotate` angle.
