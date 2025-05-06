<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Expires extends OptionAbstract {
	protected const NAME = 'expires';
	protected const ALIAS = 'exp';

	public function __construct(
		int $timestamp,
	) {
		$this->setValues([$timestamp]);
	}
}
