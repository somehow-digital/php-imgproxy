<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Zoom;

describe('Zoom', function () {
	it('returns valid values', function () {
		$values = [2.0, 4.0];

		$option = new Zoom(...$values);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe($values);
	});

	it('accepts single factor', function () {
		$value = 2.0;

		$option = new Zoom($value);

		expect($option->getValues())->toBe([$value]);
	});
});
