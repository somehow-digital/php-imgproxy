<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class AutoRotate extends OptionAbstract {
	protected const NAME = 'auto_rotate';
	protected const ALIAS = 'ar';

	public function __construct(
		bool $rotate = true,
	) {
		$this->setValues([$rotate]);
	}
}
