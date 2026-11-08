<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Gradient extends OptionAbstract
{
	protected const NAME = 'gradient';

	protected const ALIAS = 'gr';

	public function __construct(
		float $opacity,
		?string $color = null,
		float|string|null $direction = null,
		?float $start = null,
		?float $stop = null,
	) {
		$this->setValues([$opacity, $color, $direction, $start, $stop]);
	}
}
