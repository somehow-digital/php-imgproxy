<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class DrawDetections extends OptionAbstract
{
	protected const NAME = 'draw_detections';

	protected const ALIAS = 'dd';

	public function __construct(
		bool $draw = true,
		string ...$classes,
	) {
		$this->setValues([$draw, ...$classes]);
	}
}
