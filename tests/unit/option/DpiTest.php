<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Dpi;

describe('Dpi', function () {
	it('returns valid values', function () {
		$value = 90;

		$option = new Dpi($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeNull();
		expect($option->getValues())->toBe([$value]);
	});
});
