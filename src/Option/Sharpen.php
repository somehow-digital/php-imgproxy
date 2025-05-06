<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Sharpen extends OptionAbstract {
	protected const NAME = 'sharpen';
	protected const ALIAS = 'sh';

	public function __construct(
		float $sigma,
	) {
		$this->setValues([$sigma]);
	}
}
