<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Watermark extends OptionAbstract {
	protected const NAME = 'watermark';
	protected const ALIAS = 'wm';

	public function __construct(
		float $opacity,
		WatermarkPositionEnum | string | null $position = null,
		?float $horizontal = null,
		?float $vertical = null,
		?float $scale = null,
	) {
		$position = is_string($position) ? WatermarkPositionEnum::from($position) : $position;

		$this->setValues([$opacity, $position, $horizontal, $vertical, $scale]);
	}
}
