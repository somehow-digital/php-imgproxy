<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use InvalidArgumentException;

class Rotate extends OptionAbstract
{
	protected const NAME = 'rotate';
	protected const ALIAS = 'rot';

	public function __construct(
		int $angle,
	) {
		if ($angle % 90 !== 0 || abs($angle) !== $angle) {
			throw new InvalidArgumentException('Parameter `angle` must be a non-negative multiple of 90.');
		}

		$this->setValues([$angle]);
	}
}
