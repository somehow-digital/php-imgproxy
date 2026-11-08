<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Utility;

use InvalidArgumentException;

class Hex
{
	/**
	 * @throws InvalidArgumentException
	 */
	public static function decode(string $value): string
	{
		// The regular expression guards hex2bin(), which warns about invalid input.
		if (preg_match('/^(?:[0-9a-f]{2})+$/Di', $value) !== 1) {
			throw new InvalidArgumentException('Value must be a hexadecimal string.');
		}

		return pack('H*', $value);
	}
}
