<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Utility;

use BackedEnum;
use SomehowDigital\ImgProxy\Option\OptionInterface;
use Stringable;

class Url
{
	public static function encode(string $value): string
	{
		return rtrim(strtr(base64_encode($value), '+/', '-_'), '=');
	}

	public static function transform(mixed $value): mixed
	{
		return match (true) {
			default => is_scalar($value) || $value instanceof Stringable ? (string) $value : '',
			is_bool($value) => $value ? '1' : '0',
			is_array($value) => array_map(self::transform(...), $value),
			$value instanceof BackedEnum => self::transform($value->value),
			$value instanceof OptionInterface => self::transform($value->getParameters()),
		};
	}
}
