<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class UnsharpMasking extends OptionAbstract
{
	protected const NAME = 'unsharp_masking';

	protected const ALIAS = 'ush';

	public function __construct(
		?string $mode = null,
		?float $weight = null,
		?float $divider = null,
	) {
		$this->setValues([$mode, $weight, $divider]);
	}
}
