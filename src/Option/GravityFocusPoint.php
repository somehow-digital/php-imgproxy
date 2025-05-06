<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class GravityFocusPoint extends Gravity {
	public function __construct(
		 float $horizontal,
		 float $vertical,
	) {
		$this->setValues([GravityEnum::FOCUS_POINT, $horizontal, $vertical]);
	}
}
