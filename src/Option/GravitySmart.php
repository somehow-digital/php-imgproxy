<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class GravitySmart extends Gravity {
	public function __construct()
	{
		$this->setValues([GravityEnum::SMART]);
	}
}
