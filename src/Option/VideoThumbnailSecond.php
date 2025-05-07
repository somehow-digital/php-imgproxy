<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use InvalidArgumentException;

class VideoThumbnailSecond extends OptionAbstract {
	protected const NAME = 'video_thumbnail_second';
	protected const ALIAS = 'vts';

	public function __construct(
		int $second,
	) {
		if ($second < 0) {
			throw new InvalidArgumentException('Parameter `second` must be greater than or equal to 0.');
		}

		$this->setValues([$second]);
	}
}
