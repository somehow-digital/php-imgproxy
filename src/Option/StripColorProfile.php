<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class StripColorProfile extends OptionAbstract {
	protected const NAME = 'strip_color_profile';
	protected const ALIAS = 'scp';

	public function __construct(
		bool $strip = true
	) {
		$this->setValues([$strip]);
	}
}
