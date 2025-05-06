<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Saturation extends OptionAbstract {
	protected const NAME = 'saturation';
	protected const ALIAS = 'sa';

	public function __construct(
		float $saturation
	) {
		$this->setValues([$saturation]);
	}
}
