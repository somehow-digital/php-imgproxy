<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Duotone extends OptionAbstract {
	protected const NAME = 'duotone';
	protected const ALIAS = 'dt';

	public function __construct(
		float $intensity,
		?array $colors = null,
	) {
		$this->setValues([$intensity, $colors]);
	}
}
