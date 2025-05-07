<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class DisableAnimation extends OptionAbstract {
	protected const NAME = 'disable_animation';
	protected const ALIAS = 'da';

	public function __construct(
		bool $disable = true,
	) {
		$this->setValues([$disable]);
	}
}
