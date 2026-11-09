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
new Signer(string $key, string $salt)
```

Computes the HMAC-SHA256 of salt and path with the key, encoded as URL-safe Base64 without padding. `$key` and `$salt` are hexadecimal. Anything else throws an `InvalidArgumentException`.
