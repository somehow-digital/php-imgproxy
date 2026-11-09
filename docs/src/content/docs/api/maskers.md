---
title: Maskers
description: Mask the source URL.
---

`SomehowDigital\ImgProxy\Masker`

## `MaskerInterface`

```php
interface MaskerInterface
{
    public function getPathPrefix(): ?string;

    public function getFormatSeparator(): ?string;

    public function mask(string $value): string;
}
```

| Method               | Purpose                                                                        |
| -------------------- | ------------------------------------------------------------------------------ |
| `getPathPrefix`      | Path segment before the source: `plain` when `null`; an empty string omits it. |
| `getFormatSeparator` | Separator between source and format: `@` when empty or `null`.                 |
| `mask`               | Returns the masked source. An empty result falls back to URL-encoding.         |

## `EncodingMasker`

```php
new EncodingMasker()
```

Encodes the source as URL-safe Base64 without padding. No path prefix, `.` as the format separator.

## `EncryptionMasker`

:::tip[imgproxy Pro]
Encrypted source URLs are only available in imgproxy Pro.
:::

```php
new EncryptionMasker(string $key)
```

Encrypts the source with AES-CBC and a random initialization vector, then encodes it as URL-safe Base64. Path prefix `enc`, `.` as the format separator.

`$key` is hexadecimal and 16, 24 or 32 bytes long. Anything else throws an `InvalidArgumentException`.
