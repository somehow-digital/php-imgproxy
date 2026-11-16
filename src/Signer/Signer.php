<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Signer;

use InvalidArgumentException;
use SomehowDigital\ImgProxy\Utility\Hex;
use SomehowDigital\ImgProxy\Utility\Url;

class Signer implements SignerInterface
{
	private const ALGORITHM = 'sha256';

	private const MAXIMUM_SIZE = 32;

	private readonly string $key;

	private readonly string $salt;

	public function __construct(
		string $key,
		string $salt,
		private readonly int $size = self::MAXIMUM_SIZE,
	) {
		if ($size < 1 || $size > self::MAXIMUM_SIZE) {
			throw new InvalidArgumentException('Parameter `size` must be between 1 and 32.');
		}

		$this->key = Hex::decode($key);
		$this->salt = Hex::decode($salt);
	}

	public function sign(string $value): string
	{
		$digest = hash_hmac(self::ALGORITHM, $this->salt . $value, $this->key, true);
		return Url::encode(substr($digest, 0, $this->size));
	}
}
