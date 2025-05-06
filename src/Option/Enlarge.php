<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Enlarge extends OptionAbstract {
	protected const NAME = 'enlarge';
	protected const ALIAS = 'el';

	public function __construct(
		bool $enlarge = true,
	) {
		$this->setValues([$enlarge]);
	}
}
