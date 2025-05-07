<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use InvalidArgumentException;

class MaxSourceFileSize extends OptionAbstract {
	protected const NAME = 'max_src_file_size';
	protected const ALIAS = 'msfs';

	public function __construct(
		int $size,
	) {
		if ($size < 0) {
			throw new InvalidArgumentException('Parameter `size` must be greater than or equal to 0.');
		}

		$this->setValues([$size]);
	}
}
