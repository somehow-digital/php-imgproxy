<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class WatermarkSize extends OptionAbstract {
	protected const NAME = 'watermark_size';
	protected const ALIAS = 'wms';

	public function __construct(
		int $width,
		int $height
	) {
		$this->setValues([$width, $height]);
	}
}
