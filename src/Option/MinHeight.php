<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class MinHeight extends OptionAbstract {
	protected const NAME = 'min-height';
	protected const ALIAS = 'mh';

	public function __construct(
		int $height,
	) {
		$this->setValues([$height]);
	}
}
