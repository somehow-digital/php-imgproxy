<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use InvalidArgumentException;

class Pages extends OptionAbstract {
	protected const NAME = 'pages';
	protected const ALIAS = 'pgs';

	public function __construct(
		int $pages,
	) {
		if ($pages < 1) {
			throw new InvalidArgumentException('Parameter `pages` must be greater than 0.');
		}

		$this->setValues([$pages]);
	}
}
