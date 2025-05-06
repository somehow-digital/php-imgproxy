<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class MinWidth extends OptionAbstract {
	protected const NAME = 'min-width';
	protected const ALIAS = 'mw';

	public function __construct(
		int $width,
	) {
		$this->setValues([$width]);
	}
}
