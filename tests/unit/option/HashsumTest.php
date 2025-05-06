<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Hashsum;
use SomehowDigital\ImgProxy\Option\HashsumTypeEnum;

describe('Hashsum', function () {
	it('returns valid values', function () {
		$values = [HashsumTypeEnum::SHA1, 'hashsum'];

		$option = new Hashsum(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});
});
