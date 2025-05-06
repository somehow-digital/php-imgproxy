<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use SomehowDigital\ImgProxy\Utility\Url;

class WatermarkText extends OptionAbstract {
	protected const NAME = 'watermark_text';
	protected const ALIAS = 'wmt';

	public function __construct(
		string $text,
	) {
		$this->setValues([$text]);
	}

	public function getParameters(): array
	{
		return array_map([Url::class, 'encode'], parent::getParameters());
	}
}
