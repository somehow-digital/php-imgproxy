<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Brightness extends OptionAbstract {
	protected const NAME = 'brightness';
	protected const ALIAS = 'br';

	public function __construct(
		int $brightness
	) {
		if ($brightness < -255 || $brightness > 255) {
			throw new \InvalidArgumentException('Brightness must be between -255 and 255.');
		}

		$this->setValues([$brightness]);
	}
}
