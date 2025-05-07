<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Format extends OptionAbstract {
	protected const NAME = 'format';
	protected const ALIAS = 'f';

	public function __construct(
		FormatEnum | string $format,
	) {
		$format = is_string($format) ? FormatEnum::from($format) : $format;

		$this->setValues([$format]);
	}
}
