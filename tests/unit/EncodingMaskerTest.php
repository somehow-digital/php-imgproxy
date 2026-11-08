<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Masker\EncodingMasker;

describe('EncodingMasker', function (): void {
	it('encodes', function (): void {
		$value = 'test';
		$result = 'dGVzdA';

		$encoder = new EncodingMasker();
		$value = $encoder->mask($value);

		expect($value)->toBe($result);
	});

	it('returns path prefix', function (): void {
		$encoder = new EncodingMasker();
		$prefix = $encoder->getPathPrefix();

		expect($prefix)->toBeEmpty();
	});

	it('returns format prefix', function (): void {
		$encoder = new EncodingMasker();
		$prefix = $encoder->getFormatSeparator();

		expect($prefix)->toBe('.');
	});
});
