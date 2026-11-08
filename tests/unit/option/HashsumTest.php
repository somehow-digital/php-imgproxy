<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Hashsum;
use SomehowDigital\ImgProxy\Option\HashsumTypeEnum;

describe('Hashsum', function (): void {
	it('handles enum value', function (): void {
		$values = [HashsumTypeEnum::SHA1, 'hashsum'];
		$parameters = ['sha1', 'hashsum'];

		$option = new Hashsum(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('handles string value', function (): void {
		$values = [HashsumTypeEnum::SHA1, 'hashsum'];
		$parameters = ['sha1', 'hashsum'];

		$option = new Hashsum($values[0]->value, $values[1]);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('handles the sha256 type', function (): void {
		$option = new Hashsum(HashsumTypeEnum::SHA256, 'hashsum');

		expect($option->getParameters())->toBe(['sha256', 'hashsum']);
	});

	it('keeps the misspelled case as an alias', function (): void {
		expect(constant(HashsumTypeEnum::class . '::SHA2566'))->toBe(HashsumTypeEnum::SHA256);
	});
});
