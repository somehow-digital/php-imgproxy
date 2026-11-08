<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Signer;

use SomehowDigital\ImgProxy\Utility\Hex;
use SomehowDigital\ImgProxy\Utility\Url;

class Signer implements SignerInterface
{
	private const ALGORITHM = 'sha256';

	private readonly string $key;

	private readonly string $salt;

	public function __construct(
		string $key,
		string $salt,
	) {
		$this->key = Hex::decode($key);
		$this->salt = Hex::decode($salt);
	}

	public function sign(string $value): string
	{
		$digest = hash_hmac(self::ALGORITHM, $this->salt . $value, $this->key, true);
		return Url::encode($digest);
	}
}
