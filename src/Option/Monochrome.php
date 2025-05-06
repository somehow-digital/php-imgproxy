<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Monochrome extends OptionAbstract {
	protected const NAME = 'monochrome';
	protected const ALIAS = 'mc';

	public function __construct(
		float $intensity,
		?string $color = null,
	) {
		$this->setValues([$intensity, $color]);
	}
}
