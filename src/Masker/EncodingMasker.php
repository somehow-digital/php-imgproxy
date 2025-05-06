<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Masker;

use SomehowDigital\ImgProxy\Utility\Url;

class EncodingMasker implements MaskerInterface
{
	private const FORMAT_SEPARATOR = '.';

	public function getPathPrefix(): ?string
	{
		return null;
	}

	public function getFormatSeparator(): ?string
	{
		return self::FORMAT_SEPARATOR;
	}

	public function mask(string $value): string
	{
		return Url::encode($value);
	}
}
