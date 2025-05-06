<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Dpr extends OptionAbstract {
	protected const NAME = 'dpr';

	public function __construct(
		float $ratio,
	) {
		$this->setValues([$ratio]);
	}
}
