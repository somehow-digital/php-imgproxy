<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class SkipProcessing extends OptionAbstract {
	protected const NAME = 'skip_processing';
	protected const ALIAS = 'skp';

	public function __construct(
		string ...$formats,
	) {
		$this->setValues($formats);
	}
}
