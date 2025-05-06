<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class GravityObject extends Gravity {
	public function __construct(
		string ...$values
	) {
		$this->setValues([GravityEnum::OBJECT, ...$values]);
	}
}
