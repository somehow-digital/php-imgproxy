<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Dpi extends OptionAbstract {
	protected const NAME = 'dpi';

	public function __construct(
		int $dpi,
	) {
		$this->setValues([$dpi]);
	}
}
