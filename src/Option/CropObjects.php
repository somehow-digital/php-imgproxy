<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class CropObjects extends OptionAbstract
{
	protected const NAME = 'crop_objects';
	protected const ALIAS = 'c_obj';

	public function __construct(
		float $scale,
		string ...$classes,
	) {
		$this->setValues([$scale, ...$classes]);
	}
}
