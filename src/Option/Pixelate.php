<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Pixelate extends OptionAbstract {
	protected const NAME = 'pixelate';
	protected const ALIAS = 'pix';

	public function __construct(
		int $size,
	) {
		$this->setValues([$size]);
	}
}
