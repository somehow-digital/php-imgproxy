<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

class PngOptions extends OptionAbstract
{
	protected const NAME = 'png_options';

	protected const ALIAS = 'pngo';

	public function __construct(
		?bool $interlaced = null,
		?bool $quantize = null,
		?int $quantizationColors = null,
	) {
		$this->setValues([$interlaced, $quantize, $quantizationColors]);
	}
}
