<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Flip extends OptionAbstract
{
	protected const NAME = 'flip';

	protected const ALIAS = 'fl';

	public function __construct(
		bool $horizontal,
		?bool $vertical = null,
	) {
		$this->setValues([$horizontal, $vertical]);
	}
}
