<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Quality extends OptionAbstract {
	protected const NAME = 'quality';
	protected const ALIAS = 'q';

	public function __construct(
		int $quality,
	) {
		$this->setValues([$quality]);
	}
}
