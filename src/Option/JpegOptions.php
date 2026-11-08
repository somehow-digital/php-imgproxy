<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class JpegOptions extends OptionAbstract
{
	protected const NAME = 'jpeg_options';

	protected const ALIAS = 'jpgo';

	public function __construct(
		?bool $progressive = null,
		?bool $noSubsample = null,
		?bool $trellisQuant = null,
		?bool $overshootDeringing = null,
		?bool $optimizeScans = null,
		?int $quantTable = null,
	) {
		$this->setValues([$progressive, $noSubsample, $trellisQuant, $overshootDeringing, $optimizeScans, $quantTable]);
	}
}
