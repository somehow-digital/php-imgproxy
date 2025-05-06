<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Height;

describe('Height', function () {
	it('returns valid values', function () {
		$value = 12345;

		$option = new Height($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
