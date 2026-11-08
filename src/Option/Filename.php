<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use SomehowDigital\ImgProxy\Utility\Url;

class Filename extends OptionAbstract
{
	protected const NAME = 'filename';

	protected const ALIAS = 'fn';

	public function __construct(
		string $filename,
	) {
		$this->setValues([$filename]);
	}

	/**
	 * Sends the name Base64-encoded, as imgproxy does not unescape a percent-encoded one.
	 */
	public function getParameters(): array
	{
		return [...array_map(Url::encode(...), parent::getParameters()), '1'];
	}
}
