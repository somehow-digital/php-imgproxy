---
title: Url
description: The immutable URL builder.
---

`SomehowDigital\ImgProxy\Url`

## Constructor

```php
new Url(
    ?MaskerInterface $masker = null,
    ?SignerInterface $signer = null,
    array $options = [],
    ?string $source = null,
)
```

Prefer `Url::create()`, the constructor arguments after `$signer` are the builder's own state.

## `create`

```php
public static function create(
    ?MaskerInterface $masker = null,
    ?SignerInterface $signer = null,
): self
```

Creates an empty builder.

## `source`

```php
public function source(string $source): self
```

Returns a copy with the given source URL.

## `options`

```php
public function options(OptionInterface|array ...$options): self
```

Returns a copy with the options appended. An array of options starts a new [pipeline](/guide/pipelines/) step.

## `build`

```php
public function build(FormatEnum|string|null $format = null): string
```

Returns the signed path: `{signature}/{options}/{source}`. Without a signer the signature is `_`. A string format must be a value of `FormatEnum`, otherwise a `ValueError` is thrown.
