---
title: Pipelines
description: Chain multiple processing steps with imgproxy pipelines.
---

imgproxy can run several processing steps in sequence, separated by `/-/`. Pass an array of options to `options()` to start a new step.

```php
$url = Url::create()
    ->source('https://example.com/image.jpg')
    ->options(
        new Crop(1000, 1000),
        [
            new Width(100),
            new Height(100),
        ],
    );

$url->build();
// _/c:1000:1000/-/w:100/h:100/plain/https%3A%2F%2Fexample.com%2Fimage.jpg
```

Options passed outside of an array are grouped into steps in the order given: the options before an array form one step, and the array forms the next.
