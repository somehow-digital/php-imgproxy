<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Crop extends OptionAbstract {
	protected const NAME = 'crop';
	protected const ALIAS = 'c';

	public function __construct(
		int $width,
		int $height,
		?Gravity $gravity = null,
	) {
		$this->setValues([$width, $height, $gravity]);
	}
}
