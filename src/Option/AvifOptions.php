<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class AvifOptions extends OptionAbstract
{
	protected const NAME = 'avif_options';

	protected const ALIAS = 'avifo';

	public function __construct(
		?string $subsample = null,
	) {
		$this->setValues([$subsample]);
	}
}
