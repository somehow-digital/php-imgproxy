<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Raw;

describe('Raw', function () {
	it('returns valid values', function () {
		$value = true;

		$option = new Raw();

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeNull();
		expect($option->getValues())->toBe([$value]);
	});
});
