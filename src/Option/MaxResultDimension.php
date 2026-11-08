<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use InvalidArgumentException;

class MaxResultDimension extends OptionAbstract
{
	protected const NAME = 'max_result_dimension';

	protected const ALIAS = 'mrd';

	public function __construct(
		int $size,
	) {
		if ($size < 0) {
			throw new InvalidArgumentException('Parameter `size` must be greater than or equal to 0.');
		}

		$this->setValues([$size]);
	}
}
