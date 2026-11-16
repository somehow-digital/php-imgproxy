---
title: Signer
description: Sign the URL path.
---

`SomehowDigital\ImgProxy\Signer`

## `SignerInterface`

```php
interface SignerInterface
{
    public function sign(string $value): string;
}
```

Returns the signature for the path, which is passed with a leading `/`. An empty signature is replaced by the `_` placeholder.

## `Signer`

```php
new Signer(string $key, string $salt, int $size = 32)
```

Computes the HMAC-SHA256 of salt and path with the key, encoded as URL-safe Base64 without padding. `$key` and `$salt` are hexadecimal. `$size` is the number of signature bytes to keep, from 1 to 32, and must match `IMGPROXY_SIGNATURE_SIZE`. Anything else throws an `InvalidArgumentException`.
