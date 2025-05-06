<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Height extends OptionAbstract {
	protected const NAME = 'height';
	protected const ALIAS = 'h';

	public function __construct(
		int $height,
	) {
		$this->setValues([$height]);
	}
}
