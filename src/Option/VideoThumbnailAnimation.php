<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class VideoThumbnailAnimation extends OptionAbstract {
	protected const NAME = 'video_thumbnail_animation';
	protected const ALIAS = 'vta';

	public function __construct(
		int $step,
		int $delay,
		int $frames,
		int $width,
		int $height,
		?bool $extend = null,
		?bool $trim = null,
		?bool $fill = null,
		?float $horizontal = null,
		?float $vertical = null,
	) {
		$this->setValues([
			$step,
			$delay,
			$frames,
			$width,
			$height,
			$extend,
			$trim,
			$fill,
			$horizontal,
			$vertical,
		]);
	}
}
