<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class ReturnAttachment extends OptionAbstract {
	protected const NAME = 'return_attachment';
	protected const ALIAS = 'att';

	public function __construct(
		bool $return = true
	) {
		$this->setValues([$return]);
	}
}
