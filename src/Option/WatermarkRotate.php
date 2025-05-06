<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class WatermarkRotate extends OptionAbstract {
	protected const NAME = 'watermark_rotate';
	protected const ALIAS = 'wmr';

	public function __construct(
		float $angle,
	) {
		$this->setValues([$angle]);
	}
}
