<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use SomehowDigital\ImgProxy\Utility\Url;

class WatermarkUrl extends OptionAbstract {
	protected const NAME = 'watermark_url';
	protected const ALIAS = 'wmu';

	public function __construct(
		string $url,
	) {
		$this->setValues([$url]);
	}

	public function getParameters(): array
	{
		return array_map([Url::class, 'encode'], parent::getParameters());
	}
}
