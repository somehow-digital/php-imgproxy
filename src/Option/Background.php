<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Background extends OptionAbstract {
	protected const NAME = 'background';
	protected const ALIAS = 'bg';

	public function __construct(
		string | int ...$background
	) {
		$this->setValues($background);
	}
}
