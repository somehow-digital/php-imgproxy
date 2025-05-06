<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class Preset extends OptionAbstract {
	protected const NAME = 'preset';
	protected const ALIAS = 'pr';

	public function __construct(
		string ...$presets
	) {
		$this->setValues($presets);
	}
}
