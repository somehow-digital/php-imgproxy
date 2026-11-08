<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use InvalidArgumentException;

class Extend extends OptionAbstract
{
	protected const NAME = 'extend';
	protected const ALIAS = 'ex';

	public function __construct(
		bool $extend = true,
		?Gravity $gravity = null,
	) {
		if ($gravity instanceof Gravity && in_array($gravity->getValues()[0], [GravityEnum::SMART, GravityEnum::OBJECT, GravityEnum::OBJECT_WEIGHT], true)) {
			throw new InvalidArgumentException('Parameter `gravity` must not be a smart or object gravity.');
		}

		$this->setValues([$extend, $gravity]);
	}
}
