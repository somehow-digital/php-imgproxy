<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class PreserveHdr extends OptionAbstract
{
	protected const NAME = 'preserve_hdr';
	protected const ALIAS = 'ph';

	public function __construct(
		bool $preserve = true,
	) {
		$this->setValues([$preserve]);
	}
}
