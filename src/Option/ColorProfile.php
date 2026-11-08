<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class ColorProfile extends OptionAbstract
{
	protected const NAME = 'color_profile';

	protected const ALIAS = 'cp';

	public function __construct(
		string $profile,
	) {
		$this->setValues([$profile]);
	}

	public function getParameters(): array
	{
		return array_map(rawurlencode(...), parent::getParameters());
	}
}
