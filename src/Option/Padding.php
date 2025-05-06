<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Padding extends OptionAbstract
{
	protected const NAME = 'padding';
	protected const ALIAS = 'pd';

	public function __construct(
		int $top,
		?int $right = null,
		?int $bottom = null,
		?int $left = null,
	) {
		$this->setValues([$top, $right, $bottom, $left]);
	}
}
