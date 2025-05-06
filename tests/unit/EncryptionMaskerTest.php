<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Masker\EncryptionMasker;

describe('EncryptionMasker', function () {
	it('encodes', function ()  {
		$value = 'test';

		$encoder = new EncryptionMasker('ebb0968000fde25acbaa870307111fe2f058287819a0a03dc15e366b37113845');
		$value = $encoder->mask($value);

		expect($value)->toMatch('/^[A-Za-z0-9\-_]+$/');
	});

	it('encodes randomly every time', function ()  {
		$value = 'test';

		$encoder = new EncryptionMasker('ebb0968000fde25acbaa870307111fe2f058287819a0a03dc15e366b37113845');
		$value1 = $encoder->mask($value);
		$value2 = $encoder->mask($value);

		expect($value1)->not->toBe($value2);
	});

	it('returns path prefix', function ()  {
		$encoder = new EncryptionMasker('ebb0968000fde25acbaa870307111fe2f058287819a0a03dc15e366b37113845');
		$prefix = $encoder->getPathPrefix();

		expect($prefix)->toBe('enc');
	});

	it('returns format prefix', function ()  {
		$encoder = new EncryptionMasker('ebb0968000fde25acbaa870307111fe2f058287819a0a03dc15e366b37113845');
		$prefix = $encoder->getFormatSeparator();

		expect($prefix)->toBe('.');
	});
});
