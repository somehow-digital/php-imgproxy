<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Colorize extends OptionAbstract
{
	protected const NAME = 'colorize';

	protected const ALIAS = 'col';

	public function __construct(
		float $opacity,
		?string $color = null,
		?bool $keepAlpha = null,
	) {
		$this->setValues([$opacity, $color, $keepAlpha]);
	}
}
