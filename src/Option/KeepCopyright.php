<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class KeepCopyright extends OptionAbstract {
	protected const NAME = 'keep_copyright';
	protected const ALIAS = 'kcr';

	public function __construct(
		bool $keep = true,
	) {
		$this->setValues([$keep]);
	}
}
