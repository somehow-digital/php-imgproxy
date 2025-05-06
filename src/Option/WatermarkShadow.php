<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class WatermarkShadow extends OptionAbstract {
	protected const NAME = 'watermark_shadow';
	protected const ALIAS = 'wmsh';

	public function __construct(
		float $sigma,
	) {
		$this->setValues([$sigma]);
	}
}
