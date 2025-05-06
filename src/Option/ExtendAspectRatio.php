<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class ExtendAspectRatio extends OptionAbstract {
	protected const NAME = 'extend_aspect_ratio';
	protected const ALIAS = 'exar';

	public function __construct(
		bool $extend = true,
		?Gravity $gravity = null,
	) {
		$this->setValues([$extend, $gravity]);
	}
}
