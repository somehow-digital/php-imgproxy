<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class MaxBytes extends OptionAbstract {
	protected const NAME = 'max_bytes';
	protected const ALIAS = 'mb';

	public function __construct(
		int $bytes,
	) {
		$this->setValues([$bytes]);
	}
}
