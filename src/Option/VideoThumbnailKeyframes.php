<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class VideoThumbnailKeyframes extends OptionAbstract {
	protected const NAME = 'video_thumbnail_keyframes';
	protected const ALIAS = 'vtk';

	public function __construct(
		bool $keyframes = true,
	) {
		$this->setValues([$keyframes]);
	}
}
