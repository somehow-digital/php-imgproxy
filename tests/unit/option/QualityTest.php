<?php

declare(strict_types=1);

use SomehowDigital\ImgProxy\Option\Quality;

describe('Quality', function () {
	it('handles basic option', function () {
		$value = 75;
		$parameter = '75';

		$option = new Quality($value);

		expect($option->getName())->toBeString();
		expect($option->getAlias())->toBeString();
		expect($option->getValues())->toBe([$value]);
		expect($option->getParameters())->toBe([$parameter]);
	});
});
