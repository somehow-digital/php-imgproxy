<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Size extends OptionAbstract {
	protected const NAME = 'size';
	protected const ALIAS = 's';

	public function __construct(
		?Width $width = null,
		?Height $height = null,
		?Enlarge $enlarge = null,
		?Extend $extend = null,
	) {
		$this->setValues([$width, $height, $enlarge, $extend]);
	}
}
