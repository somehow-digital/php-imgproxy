<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Utility\Hex;

describe('Hex::decode', function (): void {
	it('decodes valid values', function (string $value, string $result): void {
		expect(Hex::decode($value))->toBe($result);
	})->with([
		'lowercase' => ['74657374', 'test'],
		'uppercase' => ['7465737A', 'tesz'],
	]);

	it('rejects invalid values', function (string $value): void {
		expect(fn(): string => Hex::decode($value))->toThrow(InvalidArgumentException::class);
	})->with([
		'empty' => [''],
		'odd length' => ['abc'],
		'not hexadecimal' => ['zz'],
		'surrounded' => ["ab\n"],
		'prefixed' => ['xxab'],
	]);
});
