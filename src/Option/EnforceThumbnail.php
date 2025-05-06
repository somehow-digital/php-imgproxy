<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class EnforceThumbnail extends OptionAbstract {
	protected const NAME = 'enforce_thumbnail';
	protected const ALIAS = 'eth';

	public function __construct(
		bool $enforce = true
	) {
		$this->setValues([$enforce]);
	}
}
