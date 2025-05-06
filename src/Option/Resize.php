<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Resize extends OptionAbstract {
	protected const NAME = 'resize';
	protected const ALIAS = 'rs';

	public function __construct(
		?ResizingType $type = null,
		?Width $width = null,
		?Height $height = null,
		?Enlarge $enlarge = null,
		?Extend $extend = null,
	) {
		$this->setValues([$type, $width, $height, $enlarge, $extend]);
	}
}
