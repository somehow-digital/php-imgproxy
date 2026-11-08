<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class BlurDetections extends OptionAbstract
{
	protected const NAME = 'blur_detections';

	protected const ALIAS = 'bd';

	public function __construct(
		float $sigma,
		string ...$classes,
	) {
		$this->setValues([$sigma, ...$classes]);
	}
}
