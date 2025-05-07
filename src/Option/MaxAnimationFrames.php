<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use InvalidArgumentException;

class MaxAnimationFrames extends OptionAbstract {
	protected const NAME = 'max_animation_frames';
	protected const ALIAS = 'maf';

	public function __construct(
		int $frames,
	) {
		if ( $frames < 1 ) {
			throw new InvalidArgumentException('Parameter `frames` must be greater than 0.');
		}

		$this->setValues([$frames]);
	}
}
