---
title: Extending
description: Add your own option or masker.
---

## A custom option

Extend `OptionAbstract`, name the option, and pass its values to `setValues()`. Use this for options the library does not know yet, for example one that a newer imgproxy version adds.

```php
use SomehowDigital\ImgProxy\Url;
use SomehowDigital\ImgProxy\Option\OptionAbstract;

final class Sepia extends OptionAbstract
{
    protected const NAME = 'sepia';
    protected const ALIAS = 'sp';

    public function __construct(float $intensity)
    {
        $this->setValues([$intensity]);
    }
}

Url::create()
    ->source('https://example.com/image.jpg')
    ->options(new Sepia(0.8))
    ->build();
// _/sp:0.8/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

Set `ALIAS` to `null` for an option without one. `getParameters()` turns the values into strings: booleans into `1` and `0`, enums into their value, nested options into their parameters. Override it when the value needs more, as `WatermarkText` does to Base64-encode its text.

## A custom masker

Implement `MaskerInterface`, see [Maskers](/api/maskers/).

## A custom signer

Implement `SignerInterface`, see [Signer](/api/signer/).
