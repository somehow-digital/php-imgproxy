<?php

declare(strict_types=1);

namespace SomehowDigital\ImgProxy\Masker;

use InvalidArgumentException;
use SomehowDigital\ImgProxy\Utility\Url;

class EncryptionMasker implements MaskerInterface
{
	private const PATH_PREFIX = 'enc';
	private const FORMAT_SEPARATOR = '.';

	private readonly string $key;
	private readonly string $algorithm;
	private readonly int $size;

	public function __construct(
		string $key,
	) {
		$this->key = hex2bin($key);

		if (!in_array(strlen($this->key), [16, 24, 32], true)) {
			throw new InvalidArgumentException('Invalid key provided');
		}

		$this->algorithm = match (strlen($this->key)) {
			16 => 'aes-128-cbc',
			24 => 'aes-192-cbc',
			32 => 'aes-256-cbc',
		};

		$this->size = openssl_cipher_iv_length($this->algorithm);
	}

	public function getPathPrefix(): ?string
	{
		return self::PATH_PREFIX;
	}

	public function getFormatSeparator(): ?string
	{
		return self::FORMAT_SEPARATOR;
	}

	public function mask(string $value, ?string $separator = null): string
	{
		$vector = openssl_random_pseudo_bytes($this->size);

		$cipher = openssl_encrypt(
			$value,
			$this->algorithm,
			$this->key,
			OPENSSL_RAW_DATA,
			$vector,
		);

		return Url::encode($vector . $cipher);
	}
}
