<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use InvalidArgumentException;

class MaxSourceResolution extends OptionAbstract {
	protected const NAME = 'max_src_resolution';
	protected const ALIAS = 'msr';

	public function __construct(
		int $resolution,
	) {
		if ($resolution < 1) {
			throw new InvalidArgumentException('Parameter `resolution` must be greater than 0.');
		}

		$this->setValues([$resolution]);
	}
}
