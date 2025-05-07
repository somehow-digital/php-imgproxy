<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Hashsum;
use SomehowDigital\ImgProxy\Option\HashsumTypeEnum;

describe('Hashsum', function () {
	it('handles enum value', function () {
		$values = [HashsumTypeEnum::SHA1, 'hashsum'];
		$parameters = ['sha1', 'hashsum'];

		$option = new Hashsum(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});

	it('handles string value', function () {
		$values = [HashsumTypeEnum::SHA1, 'hashsum'];
		$parameters = ['sha1', 'hashsum'];

		$option = new Hashsum($values[0]->value, $values[1]);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
		expect($option->getParameters())->toBe($parameters);
	});
});
