<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use SomehowDigital\ImgProxy\Utility\Url;

class FallbackImageUrl extends OptionAbstract {
	protected const NAME = 'fallback_image_url';
	protected const ALIAS = 'fiu';

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
