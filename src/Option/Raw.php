<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Raw extends OptionAbstract {
	protected const NAME = 'raw';

	public function __construct(
		bool $raw = true
	) {
		$this->setValues([$raw]);
	}
}
