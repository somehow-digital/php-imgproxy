<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class CropAspectRatio extends OptionAbstract
{
	protected const NAME = 'crop_aspect_ratio';

	protected const ALIAS = 'car';

	public function __construct(
		float $ratio,
		?bool $enlarge = null,
	) {
		$this->setValues([$ratio, $enlarge]);
	}
}
