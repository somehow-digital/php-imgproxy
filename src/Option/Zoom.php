<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Zoom extends OptionAbstract {
	protected const NAME = 'zoom';
	protected const ALIAS = 'z';

	public function __construct(
		float $horizontal,
		?float $vertical = null,
	) {
		$this->setValues([$horizontal, $vertical]);
	}
}
