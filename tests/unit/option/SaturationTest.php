<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Saturation;

describe('Saturation', function () {
	it('handles basic option', function () {
		$value = 2.0;

		$option = new Saturation($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
	});
});
