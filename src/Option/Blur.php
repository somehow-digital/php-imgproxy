<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Blur extends OptionAbstract {
	protected const NAME = 'blur';
	protected const ALIAS = 'bl';

	public function __construct(
		float $sigma,
	) {
		$this->setValues([$sigma]);
	}
}
