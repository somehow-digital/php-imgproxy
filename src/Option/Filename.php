<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Option;

use SomehowDigital\ImgProxy\Utility\Url;

class Filename extends OptionAbstract
{
	protected const NAME = 'filename';

	protected const ALIAS = 'fn';

	public function __construct(
		private readonly string $filename,
		private readonly bool $encoded = false,
	) {
		$this->setValues([$filename, $encoded ? true : null]);
	}

	public function getParameters(): array
	{
		$parameters = parent::getParameters();
		$parameters[0] = $this->encoded ? Url::encode($this->filename) : rawurlencode($this->filename);

		return $parameters;
	}
}
