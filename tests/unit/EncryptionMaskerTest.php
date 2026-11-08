<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Masker\EncryptionMasker;

describe('EncryptionMasker', function (): void {
	it('encodes', function (): void {
		$value = 'test';

		$encoder = new EncryptionMasker('ebb0968000fde25acbaa870307111fe2f058287819a0a03dc15e366b37113845');
		$value = $encoder->mask($value);

		expect($value)->toMatch('/^[A-Za-z0-9\-_]+$/');
	});

	it('encodes randomly every time', function (): void {
		$value = 'test';

		$encoder = new EncryptionMasker('ebb0968000fde25acbaa870307111fe2f058287819a0a03dc15e366b37113845');
		$value1 = $encoder->mask($value);
		$value2 = $encoder->mask($value);

		expect($value1)->not->toBe($value2);
	});

	it('returns path prefix', function (): void {
		$encoder = new EncryptionMasker('ebb0968000fde25acbaa870307111fe2f058287819a0a03dc15e366b37113845');
		$prefix = $encoder->getPathPrefix();

		expect($prefix)->toBe('enc');
	});

	it('returns format prefix', function (): void {
		$encoder = new EncryptionMasker('ebb0968000fde25acbaa870307111fe2f058287819a0a03dc15e366b37113845');
		$prefix = $encoder->getFormatSeparator();

		expect($prefix)->toBe('.');
	});

	it('rejects keys that are not hexadecimal', function (): void {
		expect(fn(): EncryptionMasker => new EncryptionMasker('not-hexadecimal'))->toThrow(InvalidArgumentException::class);
	});

	it('rejects keys of an invalid length', function (): void {
		expect(fn(): EncryptionMasker => new EncryptionMasker('ebb0968000fde25acbaa870307111fe2aa'))->toThrow(InvalidArgumentException::class);
	});

	it('encrypts with the cipher of the key length', function (string $key, string $cipher): void {
		$encoder = new EncryptionMasker($key);

		$decoded = base64_decode(strtr($encoder->mask('test'), '-_', '+/'), true);

		expect($decoded)->toBeString();

		$size = 16;
		$vector = substr((string) $decoded, 0, $size);
		$payload = substr((string) $decoded, $size);

		expect(openssl_decrypt($payload, $cipher, (string) hex2bin($key), OPENSSL_RAW_DATA, $vector))->toBe('test');
	})->with([
		'128 bit' => [str_repeat('ab', 16), 'aes-128-cbc'],
		'192 bit' => [str_repeat('ab', 24), 'aes-192-cbc'],
		'256 bit' => [str_repeat('ab', 32), 'aes-256-cbc'],
	]);
});
