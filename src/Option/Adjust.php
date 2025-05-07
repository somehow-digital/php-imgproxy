<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Adjust extends OptionAbstract {
	protected const NAME = 'adjust';
	protected const ALIAS = 'a';

	public function __construct(
		?Brightness $brightness = null,
		?Contrast $contrast = null,
		?Saturation $saturation = null,
	) {
		$this->setValues([$brightness, $contrast, $saturation]);
	}
}
