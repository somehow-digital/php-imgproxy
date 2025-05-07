<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class VideoThumbnailTile extends OptionAbstract {
	protected const NAME = 'video_thumbnail_tile';
	protected const ALIAS = 'vtt';

	public function __construct(
		int $step,
		int $columns,
		int $rows,
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
			$columns,
			$rows,
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
