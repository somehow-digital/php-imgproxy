<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Masker\EncodingMasker;

describe('EncodingMasker', function () {
	it('encodes', function ()  {
		$value = 'test';
		$result = 'dGVzdA';

		$encoder = new EncodingMasker();
		$value = $encoder->mask($value);

		expect($value)->toBe($result);
	});

	it('returns path prefix', function ()  {
		$encoder = new EncodingMasker();
		$prefix = $encoder->getPathPrefix();

		expect($prefix)->toBeNull();
	});

	it('returns format prefix', function ()  {
		$encoder = new EncodingMasker();
		$prefix = $encoder->getFormatSeparator();

		expect($prefix)->toBe('.');
	});
});
