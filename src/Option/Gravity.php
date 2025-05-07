<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Gravity extends OptionAbstract {
	protected const NAME = 'gravity';
	protected const ALIAS = 'g';

	public function __construct(
		GravityEnum | string $gravity,
		?float $horizontal = null,
		?float $vertical = null,
	) {
		$gravity = is_string($gravity) ? GravityEnum::from($gravity) : $gravity;

		$this->setValues([$gravity, $horizontal, $vertical]);
	}
}
