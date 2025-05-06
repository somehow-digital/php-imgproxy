<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Width extends OptionAbstract {
	protected const NAME = 'width';
	protected const ALIAS = 'w';

	public function __construct(
		int $width,
	) {
		$this->setValues([$width]);
	}
}
