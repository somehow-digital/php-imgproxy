<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class MaxAnimationFrameResolution extends OptionAbstract {
	protected const NAME = 'max_animation_frame_resolution';
	protected const ALIAS = 'mafr';

	public function __construct(
		int $resolution,
	) {
		$this->setValues([$resolution]);
	}
}
