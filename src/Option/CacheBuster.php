<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class CacheBuster extends OptionAbstract {
	protected const NAME = 'cachebuster';
	protected const ALIAS = 'cb';

	public function __construct(
		string $value,
	) {
		$this->setValues([$value]);
	}
}
