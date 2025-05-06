<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Dpr;

describe('Dpr', function () {
	it('returns valid values', function () {
		$value = 1.5;

		$option = new Dpr($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeNull();
		expect($option->getValues())->toBe([$value]);
	});
});
