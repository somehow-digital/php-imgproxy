<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class StripMetadata extends OptionAbstract {
	protected const NAME = 'strip_metadata';
	protected const ALIAS = 'sm';

	public function __construct(
		bool $strip = true
	) {
		$this->setValues([$strip]);
	}
}
