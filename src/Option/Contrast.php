<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Contrast extends OptionAbstract {
	protected const NAME = 'contrast';
	protected const ALIAS = 'co';

	public function __construct(
		float $contrast
	) {
		$this->setValues([$contrast]);
	}
}
