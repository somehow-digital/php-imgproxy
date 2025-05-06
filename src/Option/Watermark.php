<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Watermark extends OptionAbstract {
	protected const NAME = 'watermark';
	protected const ALIAS = 'wm';

	public function __construct(
		float $opacity,
		?WatermarkPositionEnum $position = null,
		?float $horizontal = null,
		?float $vertical = null,
		?float $scale = null,
	) {
		$this->setValues([$opacity, $position, $horizontal, $vertical, $scale]);
	}
}
