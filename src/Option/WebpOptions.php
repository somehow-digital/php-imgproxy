<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class WebpOptions extends OptionAbstract
{
	protected const NAME = 'webp_options';

	protected const ALIAS = 'webpo';

	public function __construct(
		?string $compression = null,
		?bool $smartSubsample = null,
		?string $preset = null,
	) {
		$this->setValues([$compression, $smartSubsample, $preset]);
	}
}
