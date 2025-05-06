<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Trim extends OptionAbstract
{
	protected const NAME = 'trim';
	protected const ALIAS = 't';

	public function __construct(
		float $threshold,
		?string $color = null,
		?bool $horizontal = null,
		?bool $vertical = null,
	) {
		$this->setValues([$threshold, $color, $horizontal, $vertical]);
	}
}
