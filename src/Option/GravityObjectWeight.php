<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class GravityObjectWeight extends Gravity {
	public function __construct(
		array ...$values
	) {
		$this->setValues([GravityEnum::OBJECT_WEIGHT, ...$values]);
	}
}
