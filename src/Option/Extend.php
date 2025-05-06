<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Extend extends OptionAbstract {
	protected const NAME = 'extend';
	protected const ALIAS = 'ex';

	public function __construct(
		bool $extend = true,
		?Gravity $gravity = null,
	) {
		$this->setValues([$extend, $gravity]);
	}
}
