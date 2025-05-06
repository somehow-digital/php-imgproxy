<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Format extends OptionAbstract {
	protected const NAME = 'format';
	protected const ALIAS = 'f';

	public function __construct(
		FormatEnum $format,
	) {
		$this->setValues([$format]);
	}
}
