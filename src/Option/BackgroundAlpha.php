<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class BackgroundAlpha extends OptionAbstract {
	protected const NAME = 'background_alpha';
	protected const ALIAS = 'bga';

	public function __construct(
		float $alpha
	) {
		$this->setValues([$alpha]);
	}
}
