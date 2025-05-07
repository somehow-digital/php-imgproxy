<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use InvalidArgumentException;

class Page extends OptionAbstract {
	protected const NAME = 'page';
	protected const ALIAS = 'pg';

	public function __construct(
		int $page,
	) {
		if ($page < 0) {
			throw new InvalidArgumentException('Parameter `page` must be equal or greater than 0.');
		}

		$this->setValues([$page]);
	}
}
