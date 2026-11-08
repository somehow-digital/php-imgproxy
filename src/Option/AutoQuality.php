<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class AutoQuality extends OptionAbstract
{
	protected const NAME = 'autoquality';

	protected const ALIAS = 'aq';

	public function __construct(
		?string $method = null,
		?float $target = null,
		?int $minQuality = null,
		?int $maxQuality = null,
		?float $allowedError = null,
	) {
		$this->setValues([$method, $target, $minQuality, $maxQuality, $allowedError]);
	}
}
